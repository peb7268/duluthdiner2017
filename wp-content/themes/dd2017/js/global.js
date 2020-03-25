
let page_name;
window.Site = {};

Site.init = function(page_name){
    let bootstrapMethod = 'init_' + page_name.split('-').join('_');
    console.log(`bootstrapMethod: ${bootstrapMethod}`);
    Site[bootstrapMethod]();
}

Site.init_page_template_blog = function(){
    $('.posts .post').on('mouseenter', function(evt){ $(this).addClass('active'); })
    $('.posts .post').on('mouseleave', function(evt){ $(this).removeClass('active'); });
}

$('document').ready(function($){
    const body_classes = Array.from(document.querySelector('body').classList);
    // var bodyClass$ = Rx.Observable.from(document.querySelector('body').classList.toString().split(' '))
    // .filter(className => className.indexOf('page-template-') > -1)
    // .filter(className => className.indexOf('-php') == -1)
    // .subscribe(className => page_name = className);
    // debugger;
    // Site.init(page_name);

    $('.menu-post .shade').on('click', function(evt){ window.location.href = $(evt.target.parentElement).find('a').attr('href') });
});