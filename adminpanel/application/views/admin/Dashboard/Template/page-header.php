<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php if(isset($PageHeaderText)) echo $PageHeaderText ?></h1>
    <?php 
    if(isset($addButton)) {
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/assets/buttons/'.$buttonFileName);
    }
    /* if(isset($addPlayerButton)) {
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/assets/buttons/add-player-button');
    } 
    
    if(isset($addFilmButton)) {
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/assets/buttons/add-film-button');
    }

    if(isset($addPhotoButton)) {
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/assets/buttons/add-photo-button');
    } */ ?>

    
</div>