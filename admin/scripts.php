    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Start datatable js -->
    <script src="assets/js/table/jquery.dataTables.js"></script>
    <!-- source: https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js -->
    <script src="assets/js/table/jquery.dataTables.min.js"></script>
    <!-- source: https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js -->
    <script src="assets/js/table/dataTables.bootstrap4.min.js"></script>
    <!-- source: https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js -->
    <script src="assets/js/table/dataTables.responsive.min.js"></script>
    <!-- source: https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js -->
    <script src="assets/js/table/responsive.bootstrap.min.js"></script>
    <!-- source: https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js -->

    <!-- start chart js -->
    <script src="assets/js/chart/Chart.min.js"></script>
    <!-- source: https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js -->
    <!-- start highcharts js -->
    <script src="assets/js/chart/highcharts.js"></script>
    <!-- source: https://code.highcharts.com/highcharts.js -->
    <!-- start zingchart js -->
    <script src="assets/js/chart/zingchart.min.js"></script>
    <!-- source: https://cdn.zingchart.com/zingchart.min.js -->
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- others plugins -->
    <script>
        var byline = document.getElementById('byline'); // Find the H2
        bylineText = byline.innerHTML; // Get the content of the H2
        bylineArr = bylineText.split(''); // Split content into array
        byline.innerHTML = ''; // Empty current content

        var span; // Create variables to create elements
        var letter;

        for (i = 0; i < bylineArr.length; i++) { // Loop for every letter
            span = document.createElement("span"); // Create a <span> element
            letter = document.createTextNode(bylineArr[i]); // Create the letter
            if (bylineArr[i] == ' ') { // If the letter is a space...
                byline.appendChild(letter); // ...Add the space without a span
            } else {
                span.appendChild(letter); // Add the letter to the span
                byline.appendChild(span); // Add the span to the h2
            }
        }
    </script>