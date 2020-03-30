import React from 'react';


export default class TextInput extends React.Component {

   render(){
       let formControl = "form-control mehan-form__input ";

       if (this.props.touched && !this.props.valid) {
           formControl = 'form-control mehan-form__input error';
       }
       return (

       <React.Fragment>
           <label htmlFor="" className={'mehan-form__label'}>{this.props.label}*</label>

           <input type="text"
                  id={this.props.id}
                  className={formControl}
                  defaultValue={this.props.value}
                  onChange={this.props.onChange}
           />
       </React.Fragment>
   )
   }
};

