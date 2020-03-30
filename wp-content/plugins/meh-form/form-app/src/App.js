import React, {Component} from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import validate from './components/Validator'
import TextInput from './components/TextInput';
import TextAreaInput from './components/TextAreaInput';
import PhoneInputMask from './components/PhoneInputMask';
import './App.css';
import data from '../src/data';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            formIsValid: false,
            formInputs: {
                name: {
                    label: '',
                    value: '',
                    touched: false,
                    valid: false,
                    error: false,
                    validationRules: {
                        maxLength: 10,
                        isRequired: true,
                    }
                },
                phone: {
                    label: '',
                    value: '',
                    error: false,
                    valid: false,
                    validationRules: {
                        maxLength: 18,
                        isRequired: true,
                    }
                },
                email: {
                    label: '',
                    value: '',
                    valid: false,
                    touched: false,
                    error: false,
                    validationRules: {
                        isEmail: true,
                        isRequired: true
                    }
                },
                question: {
                    label: '',
                    value: '',
                    valid: false,
                    touched: false,
                    error: false,
                    validationRules: {
                        minLength: 3,
                        maxLength: 150,
                        isRequired: true
                    }
                },
                message: {
                    label: '',
                    value: '',
                    valid: false,
                    touched: false,
                    error: false,
                    validationRules: {
                        minLength: 3,
                        maxLength: 400,
                        isRequired: true
                    }
                },
                send: {
                    valid: true,
                    label: '',
                    value: '',
                },
            },
            errorMessages: [],
            langErrors: {
                empty_form: ''
            },
            url: null,
            key: null,
            success: '',
            deliveredStatus: false

        };
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    componentDidMount() {
        const lang = document.documentElement.lang;

        const inputs = data[lang].labels;
        const errors = data[lang].errors;

        const updatedFormInputs = {...this.state.formInputs};

        Object.keys(this.state.formInputs).map((elem) => {
            updatedFormInputs[elem].label = inputs[elem];
        });
        this.setState({formInputs: updatedFormInputs});
        this.setState({langErrors: errors});
        this.setState({url: window.sendEmailAjax.url});
        this.setState({key: window.sendEmailAjax.key});
        this.setState({success: data[lang].success})
    }

    handleSubmit(event) {
        event.preventDefault();
        const updatedFormInputs = {...this.state.formInputs};

        Object.keys(this.state.formInputs).map((elem) => {
            if (updatedFormInputs[elem].valid === false) updatedFormInputs[elem].valid = false;
        });

        this.setState({formInputs: updatedFormInputs});

        if (this.state.formIsValid) {

            const {name, phone, email, question, message} = this.state.formInputs;

            fetch(
                this.state.url, {
                    method: 'POST',
                    body: 'action=vitaminssendemail&nonce=' + this.state.key
                        + '&name=' + name.value + '&phone=' + phone.value +
                        '&email=' + email.value + '&message=' + message.value + '&question=' + question.value,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                    },
                }
            )
                .then(response => response.json())
                .then(
                    response => {
                        console.log('Success:', JSON.stringify(response));
                        if (response.status === "200") {
                            this.setState({deliveredStatus: true})
                        }
                    }
                )
                .catch(error => console.dir(error));

        }
    }

    handleChange = e => {

        const {id} = e.currentTarget;
        const value = e.currentTarget.value;
        const updatedFormInputs = {...this.state.formInputs};

        updatedFormInputs[id].value = value;
        updatedFormInputs[id].touched = true;
        updatedFormInputs[id].valid = validate(value, updatedFormInputs[id].validationRules);

        let formIsValid = true;
        let formsError = [];

        Object.keys(this.state.formInputs).map((elem) => {
            formsError.push(updatedFormInputs[elem].valid);
        });

        if (formsError.includes(false)) formIsValid = false;

        this.setState({formInputs: updatedFormInputs, formIsValid: formIsValid});
        this.setState({deliveredStatus: false})
    };

    render() {

        const errors = [];
        this.state.errorMessages.map((elem, index) => {
            errors.push(<li key={index}>{elem}</li>)
        });

        return (

            <form onSubmit={this.handleSubmit} className={'mehan-form'}>
                <div className="row">
                    <div className="col-4">
                        <TextInput
                            id={'name'}
                            value={this.state.formInputs.name.value}
                            onChange={this.handleChange}
                            touched={this.state.formInputs.name.touched}
                            valid={this.state.formInputs.name.valid}
                            label={this.state.formInputs.name.label}
                        />
                    </div>
                    <div className="col-4">
                        <PhoneInputMask
                            value={this.state.formInputs.phone.value}
                            onChange={this.handleChange}
                            touched={this.state.formInputs.phone.touched}
                            valid={this.state.formInputs.phone.valid}
                            label={this.state.formInputs.phone.label}
                        />
                    </div>
                    <div className="col-4">
                        <TextInput
                            id={'email'}
                            value={this.state.formInputs.email.value}
                            onChange={this.handleChange}
                            touched={this.state.formInputs.email.touched}
                            valid={this.state.formInputs.email.valid}
                            label={this.state.formInputs.email.label}
                        />
                    </div>
                </div>
                <div className="row mt-3">
                    <div className="col-12">
                        <TextInput
                            id={'question'}
                            value={this.state.formInputs.question.value}
                            onChange={this.handleChange}
                            touched={this.state.formInputs.question.touched}
                            valid={this.state.formInputs.question.valid}
                            label={this.state.formInputs.question.label}
                        />
                    </div>
                </div>
                <div className="row mt-3">
                    <div className="col-12">
                        <TextAreaInput
                            id={'message'}
                            value={this.state.formInputs.message.value}
                            onChange={this.handleChange}
                            touched={this.state.formInputs.message.touched}
                            valid={this.state.formInputs.message.valid}
                            label={this.state.formInputs.message.label}
                        />
                    </div>
                </div>
                <div className="row">
                    <div className="col-12 mt-3 mb-3">
                        {!this.state.formIsValid ? this.state.langErrors.empty_form : ''}
                    </div>
                </div>

                {this.state.deliveredStatus ?
                    <div className="row">
                        <div className="col-12 mt-3 mb-3">
                            {this.state.success}
                        </div>
                    </div> :
                    ''
                }

                <input
                    type="submit"
                    value={this.state.formInputs.send.label}
                    onClick={this.handleSubmit}
                    disabled={!this.state.formIsValid}
                />
                <ul className={'mehan-form_list'}>
                </ul>
            </form>
        );
    }
}

export default App;
