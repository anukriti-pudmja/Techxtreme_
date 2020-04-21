
<script>
$(document).ready(function() {
let isOpen = false;
let $windowWidth = $( window ).width();
const $btnCollapse = $(".button-collapse");
const $content = $('#content');

$( window ).resize(function() {

$windowWidth = $( window ).width();
if($windowWidth > 1440) {
$content.css('padding-left', '250px');
if(isOpen) {
$btnCollapse.css('left', '0');
isOpen = false;
}
} else if($windowWidth < 530 && isOpen) { $btnCollapse.css('left', '0' ); $content.css('padding-left', '0' );
  $('#sidenav-overlay').css('display', 'block' ); $btnCollapse.trigger('click'); } else { if(!isOpen) {
  $content.css('padding-left', '0' ); } } }); // SideNav Button Initialization $btnCollapse.sideNav();
  $btnCollapse.on('click', ()=> {
  isOpen = !isOpen;
  if($windowWidth > 530) {
  const elPadding = isOpen ? '250px' : '0';
  $btnCollapse.css('left', elPadding);
  $content.css('padding-left', elPadding);
  $('#sidenav-overlay').css('display', 'none');
  } else {
  $('#sidenav-overlay').on('click', () => {
  isOpen = !isOpen;
  });
  }
  });
  $('#sidenav-overlay').on('click', () => {
  isOpen = !isOpen;
  });
  });
</script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/js/mdb.min.js"></script>