import React from 'react'

import ReactImageMagnify from 'react-image-magnify';

export default function Magnifier() {
    return (
        <div style={{width: '400px', height: '500px'}}>
            <ReactImageMagnify {...{
                smallImage: {
                    alt: 'Wristwatch by Ted Baker London',
                    isFluidWidth: true,
                    src: 'images/img(1).png',
                    width: 140,
                    height: 170,
                },
                largeImage: {
                    src: 'images/img(1).png',
                    width: 836,
                    height: 1100,
                },
                enlargedImagePosition:'over',
                lensStyle:{
                    backgroundColor: 'rgba(0,0,0,.6)'
                }
            }} />
        </div>
      )
}
