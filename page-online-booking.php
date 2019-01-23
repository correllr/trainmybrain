<?php get_header(); ?>

<h1 class="itemcont"><?php the_field('booking_title'); ?></h1>

<div class="itemcont">
<iframe id='cliniko-37129915' src='https://the-neuro-muscular-clinic.cliniko.com/bookings?embedded=true' frameborder='0' scrolling='auto' width='100%' height='1000'></iframe>
</div>

<script type='text/javascript'>
  window.addEventListener('message', function handleIFrameMessage (e) {
    var clinikoBookings = document.getElementById('cliniko-37129915')
    if (typeof e.data !== 'string') return;
    if (e.data.search('cliniko-bookings-resize') > -1) {
      var height = Number(e.data.split(':')[1]);
      clinikoBookings.style.height = height + 50 + 'px';
    }
    e.data.search('cliniko-bookings-page') > -1 && clinikoBookings.scrollIntoView();
  });
</script>


<?php get_footer(); ?>