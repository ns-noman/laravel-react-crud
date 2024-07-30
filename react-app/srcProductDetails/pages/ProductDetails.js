import React, { useState } from 'react'
import '../css/ProductDetails.css'
import { createRef } from 'react';


export default function ProductDetails() {

   
    const [products] = useState({
        _id: "1",
        title: "Nike Shoes",
        src: [
                'images/img(1).png',
                'images/img(2).png',
                'images/img(3).png',
                'images/img(4).png',
                'images/img(5).png',
                'images/img(6).png',
            ],
        description: "UI/UX designing, html css tutorials",
        content: "Welcome to our channel Dev AT. Here you can learn web designing, UI/UX designing, html css tutorials, css animations and css effects, javascript and jquery tutorials and related so on.",
        price: 23,
        colors:["red","black","crimson","teal"],
        count: 1,
    });
    const [index, setIndex] = useState(0);


    const thumbRef = createRef();

    const handleTab=(index)=>{
        setIndex(index);
        const images = thumbRef.current.children;
        for(let i=0;i<images.length;i++){
            images[i].className = images[i].className.replace('active','');
        }
        images[index].className = 'active';
    }

    return (
    <div className='app'>
        {
            <div className='details'>
                <div className='big-img'>
                    <img src={products.src[index]} alt={products.src[0]}/>
                </div>
                <div className='box'>
                    <div className='row'>
                        <h1>{products.title}</h1>
                        <span>${products.price}</span>
                    </div>
                    <div className='colors'>
                        {
                            products.colors.map((color, index)=>{
                               return(
                                <button style={{background: color}} key={index}></button>
                               )
                            })
                        }
                    </div>
                    <p>{products.description}</p>
                    <p>{products.content}</p>
                    <div className='thumb' ref={thumbRef}>
                        {
                            products.src.map((image, index) =>
                                <img src={image} alt={image} onClick={()=>handleTab(index)} key={index}/>
                            )
                        }
                    </div>
                    <button className='cart'>Add to cart</button>
                </div>
            </div>
        }
    </div>
    )
}
