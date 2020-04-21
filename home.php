<?php include 'header.php'; ?>
<div class="container-fluid">
    <?php include 'navbar.php'; ?>
    <?php include 'carousel.php'; ?>
    <br>
    <br>
    <?php include 'card.php'; ?>
    <br>
    <div class="container-fluid">
    <?php include 'new.php'; ?>
    </div>
   
    <br>
    <?php include 'testimonial.php'; ?>
    <br>
    
    <?php include 'foot.php'; ?>
</div>
<script>
    $(".navbar").sticky({
        ...
        stickyClass: ['navbar-dark', 'mdb-color'],
        ...
    });
</script>
<?php include 'footer.php'; ?>