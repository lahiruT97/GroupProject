window.addEventListener('scroll',()=>{
	let content = document.querySelector('.col1');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
window.addEventListener('scroll',()=>{
	let content = document.querySelector('.col2');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
window.addEventListener('scroll',()=>{
	let content = document.querySelector('.col3');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
window.addEventListener('scroll',()=>{
	let content = document.querySelector('.col4');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
window.addEventListener('scroll',()=>{
	let content = document.querySelector('.col5');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
window.addEventListener('scroll',()=>{
	let content = document.querySelector('.col6');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
window.addEventListener('scroll',()=>{
	let content = document.querySelector('.whySelect');
	let contentPosition = content.getBoundingClientRect().top;
	let screenPosition = window.innerHeight;
	if(contentPosition<screenPosition){
		content.classList.add('active');
	}
});
const slidingNewsletter = document.querySelector('.whySelect');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter.classList.add('active')
    }
})
const slidingNewsletter2 = document.querySelector('.left');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter2.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter2.classList.add('active')
    }
})
const slidingNewsletter3 = document.querySelector('.left2');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter3.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter3.classList.add('active')
    }
})
const slidingNewsletter4 = document.querySelector('.left3');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter4.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter4.classList.add('active')
    }
})
const slidingNewsletter5 = document.querySelector('.left4');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter5.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter5.classList.add('active')
    }
})
const slidingNewsletter6 = document.querySelector('.left5');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter6.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter6.classList.add('active')
    }
})
const slidingNewsletter7 = document.querySelector('.left6');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter7.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter7.classList.add('active')
    }
})
const slidingNewsletter8 = document.querySelector('.left7');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter8.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter8.classList.add('active')
    }
})
const slidingNewsletter9 = document.querySelector('.left8');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter9.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.1){
        slidingNewsletter9.classList.add('active')
    }
})
const slidingNewsletter10 = document.querySelector('.left9');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

     console.log(scrollTop, clientHeight);

    const topElementToTopViewport = slidingNewsletter10.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight*0.3){
        slidingNewsletter10.classList.add('active')
    }
})