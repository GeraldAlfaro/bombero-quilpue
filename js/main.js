window.addEventListener("load", function () {


    // Menu de hamburguesa responsive navbar
    document.querySelector(".main-menu-icon").addEventListener("click", () => {
        document.querySelector("#main-menu-link-container").classList.toggle("show-menu");
        document.querySelector("#main-menu-link-container").classList.remove("close-menu");
    })
    document.querySelector(".main-menu-close-icon").addEventListener("click", () => {
        document.querySelector("#main-menu-link-container").classList.toggle("close-menu");
        document.querySelector("#main-menu-link-container").classList.remove("show-menu");
    })



    const loadPosts = (category, page = 1) => {
        fetch(ajaxurl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `action=cargar_posts_por_categoria&categoria=${category}&pagina=${page}`
        })
        .then(response => response.text())
        .then(data => {
            document.querySelector('.tab-voluntarios-content').innerHTML = data;

            // Añadir eventos a los botones de paginación
            document.querySelectorAll('.pagination-button').forEach(button => {
                button.addEventListener('click', () => {
                    const selectedPage = button.getAttribute('data-page');
                    loadPosts(category, selectedPage);
                });
            });
        })
        .catch(error => console.error('Error:', error));
    };

    // Cargar la categoría por defecto al inicio
    const defaultCategory = document.querySelector('input[name="tabs-voluntarios"]:checked').id;
    loadPosts(defaultCategory);

    document.querySelectorAll('input[name="tabs-voluntarios"]').forEach(input => {
        input.addEventListener('change', () => {
            loadPosts(input.id);
        });
    });


    document.querySelectorAll('input[name="tabs-voluntarios"]').forEach(input => {
    input.addEventListener('change', () => {
        const selectedCategory = input.id;

        fetch(ajaxurl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `action=cargar_posts_por_categoria&categoria=${selectedCategory}`
        })
        .then(response => response.text())
        .then(data => {
            document.querySelector('.tab-voluntarios-content').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    });
});

// Definir currentCategory basándolo en el tab seleccionado
let currentCategory = document.querySelector('input[name="tabs-voluntarios"]:checked').id;

// Función para actualizar currentCategory cuando se cambia el tab
const updateCategory = () => {
    currentCategory = document.querySelector('input[name="tabs-voluntarios"]:checked').id;
};

// Agregar el evento change a los inputs de tabs para actualizar currentCategory
document.querySelectorAll('input[name="tabs-voluntarios"]').forEach(tab => {
    tab.addEventListener('change', updateCategory);
});

const buscador = () => {
    const input = document.getElementById('buscador').value.toUpperCase();
    fetch(ajaxurl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `action=cargar_posts_por_categoria&categoria=${currentCategory}&search=${input}`
    })
    .then(response => response.text())
    .then(data => {
        document.querySelector('.tab-voluntarios-content').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
};

document.getElementById('buscador').addEventListener('input', buscador);

});

const handlePagination = () => {
    document.querySelector('.tab-voluntarios-content').addEventListener('click', (event) => {
        if (event.target.classList.contains('pagination-button')) {
           //  console.log('Botón clicado:', event.target); Debugging 
    
            // Desactivar el resto y activar el clicado
            document.querySelectorAll('.pagination-button').forEach(btn => {
                btn.classList.remove('active-voluntarios');
            });
    
            event.target.classList.add('active-voluntarios');
    
            const selectedPage = event.target.getAttribute('data-page');
            cargarPostsPorPagina(selectedPage);
        }
    });
    
    
};

const cargarPostsPorPagina = (page) => {
    const categoria = document.querySelector('input[name="tabs-voluntarios"]:checked').id;

    fetch(ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            action: 'cargar_posts_por_categoria',
            categoria: categoria,
            pagina: page
        })
    })
    .then(response => response.text())
    .then(html => {
        // Actualizar solo el contenido de la sección dinámica
        document.querySelector('.tab-voluntarios-content').innerHTML = html;
        // console.log('Contenido actualizado:', document.querySelector('.tab-voluntarios-content').innerHTML); 
    })
    .catch(error => console.error('Error:', error));
};


document.addEventListener('DOMContentLoaded', () => {
    handlePagination(); // Llamar en la carga inicial
});

// console.log(document.querySelectorAll('.pagination-button'));
