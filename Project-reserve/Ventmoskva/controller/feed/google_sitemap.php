<?php
class ControllerFeedGoogleSitemap extends Controller {
    public function index() {
        $output = '<?xml version="1.0" encoding="UTF-8"?>';
        $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $xml_lines = array();


        # Pages

        $this->load->model('catalog/information');

        $pages = $this->model_catalog_information->getInformations();

        foreach($pages as $page) {
            $page_id = $page['information_id'];
            $page_url = $this->url->link('information/information', 'information_id=' . $page_id);

            $xml_lines[] = $page_url;
        }


        # Categories

        $query = $this->db->query("SELECT category_id FROM oc_category");
        $categories = $query->rows;

        foreach($categories as $category) {
            $cat_id = $category['category_id'];
            $cat_url = $this->url->link('product/category', 'path=' . $cat_id);

            $xml_lines[] = $cat_url;
        }


        # Products

        $this->load->model('catalog/product');

        $products = $this->model_catalog_product->getProducts();

        foreach($products as $product) {
            $prod_id = $product['product_id'];
            $prod_url = $this->url->link('product/product', 'product_id=' . $prod_id);

            $xml_lines[] = $prod_url;
        }


        # Display

        foreach($xml_lines as $item) {
            $output .= '<url><loc>'. $item .'</loc></url>';
        }


        $output .= '</urlset>';

        $this->response->addHeader('Content-Type: application/xml; charset=utf-8');
        $this->response->setOutput($output);
    }
}
?>