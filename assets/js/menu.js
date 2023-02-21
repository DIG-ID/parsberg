document.addEventListener('DOMContentLoaded', function() {
  //Sticky navigation
  const header = document.querySelector('.main-header');
  let lastScroll = 0;

  window.addEventListener( 'scroll', () => {
    const currentScroll = window.pageYOffset;
    if ( currentScroll <= 0 ) {
      //console.log('current scroll is ' + currentScroll);
      header.classList.remove( 'main-header--scrolled' );
      return;
    } 
    if ( currentScroll > lastScroll && currentScroll > 0 && ! header.classList.contains('main-header--scrolled') ) {
      //down
      header.classList.remove( 'main-header--scrolled' );
      header.classList.add( 'main-header--scrolled' );
    } 
    lastScroll = currentScroll;
  });
});
