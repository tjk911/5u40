        </div>
        </section>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/dynamicpage.js"></script>
    <script type="javascript" src="js/jquery.doubleScroll.js"></script>
    <script>
      $(document).foundation(function(){
           $('#double-scroll').doubleScroll();
        });
    </script>
    <script src="js/skrollr.min.js"></script>
    <script type="text/javascript">
    var s = skrollr.init({
        forceHeight: false,
        smoothScrolling: false,
        mobileCheck: function() {
            return false;
        }
    });
    </script>
    <script src="js/responsive-tables.js"></script>
  </body>
</html>