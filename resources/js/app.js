// var myCarousel = document.querySelector('#myCarousel')
// var carousel = new bootstrap.Carousel(myCarousel, {
//   interval: 2000,
//   wrap: false
// })

// function kak(){
//     $.ajax({
//         type: 'POST',
//         datatype: 'text',
//         url: '/register/submit',
//         data: {
//             login: document.getElementById('login-form-register').value,
//             surname: document.getElementById('login-form-register').value,
//             name: document.getElementById('login-form-register').value,
//             patronymic: document.getElementById('login-form-register').value,
//             email: document.getElementById('login-form-register').value,
//             PasswordRepit: document.getElementById('login-form-register').value,
//             password: document.getElementById('password-form-register').value,
//         },
//         headers: {
//             'X-CSRF-TOKEN': document.getElementsByName('_token')[0].value
//         },
//         success: function(data){
//             if(data == true){
//                 url = "{{ route('home') }}"
//                 $(location).attr('href',url);
//             }else{
//                 document.getElementById('login-form-register').innerHTML = data;
//             }
//         }
//     })
// }
