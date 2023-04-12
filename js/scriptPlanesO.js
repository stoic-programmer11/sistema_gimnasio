let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};


var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    grabCursor: true,
    loop:true,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        600:{
            slidesPerView:2,
        },
    },
});

var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        991:{
            slidesPerView:3,
        },
    },
});


// GALERIA DE IMAGENES

// // Función de inicio para la galería de imágenes
// function initGallery() {
//     // Obtener todos los botones de filtro
//     const filterButtons = document.querySelectorAll('.filter-button');
  
//     // Obtener todos los elementos de la galería
//     const galleryItems = document.querySelectorAll('.gallery-item');
  
//     // Añadir un evento click a cada botón de filtro
//     filterButtons.forEach(button => {
//       button.addEventListener('click', () => {
  
//         // Obtener la clase de filtro del botón
//         const filter = button.getAttribute('data-filter');
  
//         // Mostrar todos los elementos si el botón "Todos" es seleccionado
//         if (filter === 'all') {
//           galleryItems.forEach(item => {
//             item.style.display = 'block';
//           });
//         } else {
//           // Ocultar los elementos que no tienen la clase de filtro y mostrar los elementos que la tienen
//           galleryItems.forEach(item => {
//             if (!item.classList.contains(filter)) {
//               item.style.display = 'none';
//             } else {
//               item.style.display = 'block';
//             }
//           });
//         }
  
//         // Agregar la clase 'active' al botón seleccionado
//         filterButtons.forEach(button => {
//           button.classList.remove('active');
//         });
//         button.classList.add('active');
  
//       });
//     });
//   }
  
//   // Llamar a la función de inicio para la galería de imágenes
//   initGallery();




  
// Función de inicio para la galería de imágenes
function initGallery() {
    // Obtener todos los botones de filtro
    const filterButtons = document.querySelectorAll('.filter-button');
  
    // Obtener todos los elementos de la galería
    const galleryItems = document.querySelectorAll('.gallery-item');
  
    // Añadir un evento click a cada botón de filtro
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
  
        // Obtener la clase de filtro del botón
        const filter = button.getAttribute('data-filter');
  
        // Mostrar todos los elementos si el botón "Todos" es seleccionado
        if (filter === 'all') {
          galleryItems.forEach(item => {
            item.style.display = 'flex';
          });
        } else {
          // Ocultar los elementos que no tienen la clase de filtro y mostrar los elementos que la tienen
          galleryItems.forEach(item => {
            if (!item.classList.contains(filter)) {
              item.style.display = 'none';
            } else {
              item.style.display = 'flex';
            }
          });
        }
  
        // Agregar la clase 'active' al botón seleccionado
        filterButtons.forEach(button => {
          button.classList.remove('active');
        });
        button.classList.add('active');
  
      });
    });
  }
  

  function initGalleryImg() {
    // Obtener todos los botones de filtro
    const filterButtons = document.querySelectorAll('.filter-button');
  
    // Obtener todos los elementos de la galería
    const galleryItemsImagenes = document.querySelectorAll('.gallery-item-img');
  
    // Añadir un evento click a cada botón de filtro
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
  
        // Obtener la clase de filtro del botón
        const filter = button.getAttribute('data-filter');
  
        // Mostrar todos los elementos si el botón "Todos" es seleccionado
        if (filter === 'all') {
          galleryItemsImagenes.forEach(item => {
            item.style.display = 'flex';
          });
        } else {
          // Ocultar los elementos que no tienen la clase de filtro y mostrar los elementos que la tienen
          galleryItemsImagenes.forEach(item => {
            if (!item.classList.contains(filter)) {
              item.style.display = 'none';
            } else {
              item.style.display = 'flex';
            }
          });
        }
  
        // Agregar la clase 'active' al botón seleccionado
        filterButtons.forEach(button => {
          button.classList.remove('active');
        });
        button.classList.add('active');
  
      });
    });
  }


  // Llamar a la función de inicio para la galería de imágenes
  initGallery();
  initGalleryImg();



// // Obtener todos los botones de filtro
// const filterButtons = document.querySelectorAll('.filter-button');

// // Obtener todos los elementos de la galería
// const galleryItemsImagenes = document.querySelectorAll('.gallery-item');

// // Añadir un evento click a cada botón de filtro
// filterButtons.forEach(button => {
//   button.addEventListener('click', () => {

//     // Obtener la clase de filtro del botón
//     const filter = button.getAttribute('data-filter');

//     // Mostrar todos los elementos si el botón "Todos" es seleccionado
//     if (filter === 'all') {
//       galleryItems.forEach(item => {
//         item.style.display = 'block';
//       });
//     } else {
//       // Ocultar los elementos que no tienen la clase de filtro y mostrar los elementos que la tienen
//       galleryItems.forEach(item => {
//         if (!item.classList.contains(filter)) {
//           item.style.display = 'none';
//         } else {
//           item.style.display = 'block';
//         }
//       });
//     }

//     // Agregar la clase 'active' al botón seleccionado
//     filterButtons.forEach(button => {
//       button.classList.remove('active');
//     });
//     button.classList.add('active');

//   });
// });



