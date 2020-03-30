import React from 'react';

const TextAreaInput = props => {
    let formControl = "form-control mehan-form__input ";

    if (props.touched && !props.valid) {
        formControl = 'form-control mehan-form__input error';
    }

    return (
        <React.Fragment>
            <label htmlFor="" className={'mehan-form__label'}>{props.label}*</label>
            <textarea id={'message'} cols="30" rows="10"
                      onChange={props.onChange}
                      className={formControl}/>
        </React.Fragment>
    )
};

export default TextAreaInput;