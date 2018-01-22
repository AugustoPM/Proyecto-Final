<!DOCTYPE html>
<html lang="en" class="no-js">
   @include('layouts/general.head')

    <!-- BODY -->
    <body>

        @include('layouts/general.header')

        @include('layouts/contact.parallax-contact')

        <!--========== PAGE LAYOUT ==========-->
        @include('layouts/contact.list')

       @include('layouts/contact.map')
        <!-- Promo Section -->
        @include('layouts/products.clients')
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->

       @include('layouts/general.footer')

    

    </body>
    <!-- END BODY -->
</html>