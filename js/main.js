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
    // Podrías hacer que cargue posts automáticamente aquí si quieres
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
        // Reaplicar eventos de paginación si es necesario
    })
    .catch(error => console.error('Error:', error));
};

document.getElementById('buscador').addEventListener('input', buscador);


const handlePagination = () => {
    const paginationContainer = document.querySelector('.pagination');

    // Delegación de eventos para manejar clicks en botones de paginación
    paginationContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('pagination-button')) {
            document.querySelectorAll('.pagination-button').forEach(btn => btn.classList.remove('active-voluntarios'));
            event.target.classList.add('active-voluntarios');

            const selectedPage = event.target.getAttribute('data-page');
            cargarPostsPorPagina(selectedPage);
        }
    });
};

const cargarPostsPorPagina = (page) => {
    const categoria = document.querySelector('input[name="tabs"]:checked').id;

    fetch('/wp-admin/admin-ajax.php', {
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
        document.querySelector('.tab-voluntarios-content').innerHTML = html;

        // Reaplicar manejadores de paginación después de cargar contenido nuevo
        handlePagination();
    });
};

/* // agregar activo a los botones de paginacion

document.querySelector('.pagination').addEventListener('click', (event) => {
    // Verifica que el elemento clickeado sea un botón de paginación
    if (event.target.classList.contains('pagination-button')) {
        // Remover la clase 'active' de todos los botones
        document.querySelectorAll('.pagination-button').forEach(btn => btn.classList.remove('active-voluntarios'));

        // Agregar la clase 'active' al botón clickeado
        event.target.classList.add('active-voluntarios');

        // Obtener la página seleccionada
        const selectedPage = event.target.getAttribute('data-page');
        cargarPostsPorPagina(selectedPage);
    }
});

function cargarPostsPorPagina(page) {
    // Aquí puedes implementar la lógica de AJAX para cargar la página seleccionada.
    console.log(`Cargando página ${page}`);
}
 */

});



