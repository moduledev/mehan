<?php block_field( 'image' ); ?>
<?php block_field( 'link' ); ?>


<div class="col-lg-4 mb-4" >
    <div class="flip-card text-center">
        <div class="flip-card-front dark" style="background-image: url(<?php block_field( 'image' ); ?>)">
            <div class="flip-card-inner">
                <div class="card nobg noborder text-center">
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text t400">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card-back bg-danger no-after">
            <div class="flip-card-inner">
                <p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>
                <button type="button" class="btn btn-outline-light mt-2"><a href="<?php block_field( 'testimonial-text' ); ?>">Далее</a></button>
            </div>
        </div>
    </div>
</div>
