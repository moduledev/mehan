const {registerBlockType} = wp.blocks;
const {
    RichText,
    InspectorControls,
    ColorPalette,
    MediaUpload,
} = wp.editor;

const {PanelBody, IconButton, SelectControl} = wp.components;

registerBlockType('mehun/custom-cta', {
    // built-in attribute
    title: 'Call to action',
    description: 'Block to generate a custom Call to action',
    icon: 'shield',
    category: 'layout',

    // custom attribute
    attributes: {
        title: {
            type: 'string',
            source: 'html',
            selector: 'h2'
        },
        body: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
        titleColor: {
            type: 'string',
            default: 'black',
        },
        backgroundImage: {
            type: 'string',
            default: null,
        },
        selectCon: {
            type: 'string',
        },
        selectConLinks: {
            type: 'string',
        }
    },

    //built-in function

    // Get manu links from custom API Endpoint
    edit: ({attributes, setAttributes}) => {

        const {
            title, body, titleColor, backgroundImage, selectConLinks
        } = attributes;

        fetch('/wp-json/test/v1/latest-posts/1')
            .then(res => res.json())
            .then((res) => {
                let links = [];
                for (let i = 0; i < res.length; i++) {
                    links.push({value: res[i].url, label: res[i].title})
                }
                setAttributes({selectConLinks: links});
            });


        //custom function
        function onChangeTitle(newTitle) {
            setAttributes({title: newTitle});
        }

        function onTitleColorChange(newColor) {
            setAttributes({titleColor: newColor})
        }

        function onChangeBody(newBody) {
            setAttributes({body: newBody});
        }

        function onSelectImage(newImage) {
            setAttributes({backgroundImage: newImage.sizes.full.url});
        }

        function onChangeSelect(newLink) {
            setAttributes({selectCon: newLink});
        }

        return ([
            <InspectorControls style={{marginBottom: '40px'}}>

                <PanelBody title={'Font Color Settings'}>
                    <p><strong>Select title color</strong></p>
                    <ColorPalette value={titleColor}
                                  onChange={onTitleColorChange}/>

                </PanelBody>

                <PanelBody title={'Background Image Settings'}>
                    <p><strong>Select background image</strong></p>
                    <MediaUpload onSelect={onSelectImage}
                                 type='image'
                                 value={backgroundImage}
                                 render={({open}) => (
                                     <IconButton onClick={open}
                                                 icon='upload'
                                                 className='block-editor-media-placeholder__button is-button is-default'>
                                         Background Image
                                     </IconButton>
                                 )}/>
                </PanelBody>
                <PanelBody>
                    <p>Select Menu Link</p>

                    <SelectControl
                        label="Choice link"
                        value={attributes.selectCon}
                        options={attributes.selectConLinks}
                        onChange={onChangeSelect}
                    />
                </PanelBody>
            </InspectorControls>,
            <div class="cta-container">
                <RichText key="editable"
                          tagName="h2"
                          placeholder="Your title"
                          value={title}
                          onChange={onChangeTitle}
                          style={{color: titleColor}}/>

                <RichText key="editable"
                          tagName="p"
                          placeholder="Your description"
                          value={body}
                          onChange={onChangeBody}/>

            </div>
        ]);
    },

    save: ({attributes}) => {
        const {
            title, body, titleColor, backgroundImage, selectCon
        } = attributes;

        return (
            <div class="d-flex justify-content-start flex-column advantage-box">
                <div class="advantage-box__img" style={{backgroundImage: "url(" + backgroundImage + ")"}}></div>
                <a class="advantage-box__link" href={selectCon}><h2 style={{color: titleColor}}>{title}</h2></a>
                <RichText.Content tagName="p"
                                  className={'advantage-box__description'}
                                  value={body}/>
            </div>

        );
    }
});