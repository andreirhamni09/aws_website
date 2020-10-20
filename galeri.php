<?php include_once 'pages/layout/header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0 text-primary"><strong>Foto Uploadan</strong></h5>
                        </div>
                        <div class="card-body">
                            <div class="gallery">
                                <?php 
                                // Include database configuration file 
                                $conn = mysqli_connect("localhost", "srsssmsc_frkh", "wasd@@asdasd" , "srsssmsc_mp");
     
                                // Retrieve images from the database 
                                $query = $conn->query("SELECT * FROM mp_panen_tbs ORDER BY tanggal DESC"); 
     
                                if($query->num_rows > 0){ 
                                    while($row = $query->fetch_assoc()){ 
                                        $imageThumbURL = 'data/images/'.$row["foto"]; 
                                        $imageURL = 'data/images/'.$row["foto"]; 
                                ?>
		                        <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["foto"]; ?>" >
			                    <img src="<?php echo $imageThumbURL; ?>" alt="" />
			                    </a>
                                <?php } 
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'layout/footer.php' ?>