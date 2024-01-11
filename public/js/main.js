$(document).ready(function () {
    // console.log('jquery ready');

    function fetchProducts() {
        axios.get('https://api.escuelajs.co/api/v1/products?offset=0&limit=24')
            .then((response) => {
               const products = response.data;
               let output = '';

               $.each(products, (index, product) => {
                    output = `
                        <div>
                            <h3>${product.title}</h3>
                        </div>
                    `;
               });

               $('#products').html(output);
            })

            .catch(error => {
               console.error("Error fetching products:", error);
            });
    }



    fetchProducts();
});