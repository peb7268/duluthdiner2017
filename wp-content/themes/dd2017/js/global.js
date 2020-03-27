
let page_name;

// window.Site = {};

// Site.init = function(page_name){
//     let bootstrapMethod = 'init_' + page_name.split('-').join('_');
//     console.log(`bootstrapMethod: ${bootstrapMethod}`);
//     Site[bootstrapMethod]();
// }

// Site.init_page_template_blog = function(){
//     $('.posts .post').on('mouseenter', function(evt){ $(this).addClass('active'); })
//     $('.posts .post').on('mouseleave', function(evt){ $(this).removeClass('active'); });
// }



$('document').ready(function($){
    const body_classes = Array.from(document.querySelector('body').classList);
    init(body_classes);
});

function bindEvents(){
    $('.menu-post .shade').on('click', function(evt){ window.location.href = $(evt.target.parentElement).find('a').attr('href') });
}

function init(body_classes){
    bindEvents();
    if(body_classes.includes('home')) init_testimonials();
}


//Testimonials
const transition_time = 7000;
const testimonials = [
    {
        "text": "it's hard to believe how everything on a menu can be so good, but everything i've had has been amazing.",
        "name": "Paul"
    },
    {
        "text": "Nice atmosphere. Prompt seating. Server was attentive but not intrusive. Wide menu selection. Breakfast available all day. Food was tasty and well presented. Great selection of deserts.",
        "name": "Glen Troutman"
    },
    {
        "text": "Excellent service today. The food was great as always. I was seated quickly and the staff was nice. What a difference. See my review about the terrible experience at Waffle House on Peachtree Industrial earlier today. Glad I was able to find some good service and food for lunch.",
        "name": "Matthew Mays"
    },
    {
        "text": "Fantastic little place for a great and hearty breakfast! Right upon Peachtree Industrial, you can't miss it! Went there today with a good friend of mine. Food was great! Very good sausage patties, good coffee and fantastic pancakes. Toss in the fast and friendly service and you have a winner! I had the Duluth Diner Special, with 2 eggs, biscuit, bacon, sausage and pancakes, and it really was a treat! Keep it up guys!",
        "name": "D. Knapp"
    },
    {
        "text": "Breakfast on a Saturday morning was phenomenal!  Staff is attentive and helpful, seating was quick, and food was very tasty!  This is a gem we’ll come back to every time we’re in the area for sure. Like",
        "name": "Jason Romero"
    }
];

function init_testimonials() {
    window.setInterval(() => {
        const testimonialsEl    = document.querySelector('.wrapper.testimonials');
        const testimonialTextEl = testimonialsEl.querySelector('.testimonial .text');
        const testimonialNameEl = testimonialsEl.querySelector('.testimonial .name');

        const newTestimonial = testimonials[Math.floor(Math.random() * (testimonials.length - 1)) + 1]; 
        
        testimonialsEl.querySelector('.testimonial').classList.toggle('hidden');
        
        window.setTimeout(()=>{
            testimonialTextEl.innerText     = newTestimonial.text;
            testimonialNameEl.innerText     = newTestimonial.name;
            window.setTimeout(() => {
                testimonialsEl.querySelector('.testimonial').classList.toggle('hidden');
            }, 250);
        }, 450);
    }, transition_time);
}