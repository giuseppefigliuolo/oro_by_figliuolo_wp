<?php 
get_header();
?>


<div class="obf-container">
    <main>
        <div class="obf-container">
            <div class="error-404">
                <header>
                    <h1>Pagina non trovata</h1>
                    <p>Ci dispiace, il contenuto che stavi cercando non ha prodotto alcun risultato.</p>
                </header>
                <section class="new-arrivals-products">
                    <div class="obf-container">
                        <h2>Ti potrebbe interessare:</h2>
                        <!-- this is a woocommerce shortcode for products -->
                        <?php echo do_shortcode('[products limit="4" columns="4" orderby="date"]'); ?>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>


<?php
get_footer();
?>