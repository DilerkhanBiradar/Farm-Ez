// let sections = document.querySelectorAll('section');

// window.onscroll=()=>{
//     sections.forEach(sec =>{
//         let top=window.scrollY;
//         // let top=window.offsetTop
//         let offset=sec.offsetTop - 150;
//         let height=sec.offsetHeight;

//         if(top >= offset && top < offset + height){
//             sec.classList.add('show-testimonial');
//         }
//         else{
//             sec.classList.remove('show-testimonial');
//         }7
//     })
// }

const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('click',() =>{
    dropdown.classList.toggle('active');
});

const testim =document.querySelectorAll('.testimonal')
var counter=0;
// console.log(testim);
testim.forEach(
    (testimonal,index)=>{
        testimonal.style.left = `${index * 100}%`
    }
)

const goPrev=()=>{
    if(counter==0){
        counter=0
    }
    else{
        counter--
        slideimage()
    }
    
}
const goNext=()=>{
    if(counter==3){
        counter=3
    }
    else{
        counter++
        slideimage()
    }
    
}
const slideimage=()=>{
    testim.forEach(
        (testimonal)=>{
            testimonal.style.transform=`translateX(-${counter*100}%)`
        }
    )
}

// const observer = new IntersectionObserver((entries)=>{
//     entries=>{
//         if(entries.isIntersecting){
//             entries.target.classList.add('show');
//         }else{
//             entries.target.classList.remove('show');
//         }
//     }
// });

// const sections = document.querySelectorAll('.review');
// sections.entries((el)=>observer.observe(el));