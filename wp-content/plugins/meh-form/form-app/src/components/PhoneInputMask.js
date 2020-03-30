import React from 'react';
import InputMask from 'react-input-mask';

export default class PhoneInputMask extends React.Component {
    render() {
        return (
            <React.Fragment>
                <label htmlFor="" className={'mehan-form__label'}>{this.props.label}*</label>

                <InputMask
                    onChange={this.props.onChange}
                    value={this.props.value}
                    id={'phone'}
                    className={'form-control mehan-form__input' + (this.props.touched && !this.props.valid ? ' error' : '')}
                    mask="+3\80 99 999 99 99"
                    maskChar=" "

                />
            </React.Fragment>
        )
    }

}