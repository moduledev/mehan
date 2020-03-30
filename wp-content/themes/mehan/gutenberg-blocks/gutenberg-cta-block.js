const {registerBlockType} = wp.blocks;

registerBlockType('mehun/custom-cta', {
    // built-in attribute
    title: 'Call to action',
    description: 'Block to generate a custom Call to action',
    icon: 'shield',
    category: 'layout',

    // custom attribute
    attribute: {},

    //custom function


    //built-in function
    edit(){
        return <div>Hello</div>;
    },

    save(){

    }
});