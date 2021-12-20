<h1>Snack 5: paragraph</h1>
<?php
    //Snack 5
    //Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae consectetur sapien, sit amet egestas justo. Pellentesque facilisis consequat justo sit amet finibus. Nulla tempor tortor iaculis ipsum auctor semper. Fusce varius mauris mi, sed efficitur nisi sagittis ut. Pellentesque placerat mattis laoreet. Suspendisse pellentesque, nisl id imperdiet dignissim, augue leo placerat tortor, non mollis urna lectus ac lectus. Nullam lacinia tincidunt ultrices. Donec pulvinar commodo auctor. Phasellus lacinia feugiat sem, at volutpat nulla vehicula in. Mauris purus eros, fermentum vel malesuada non, tincidunt quis mauris. Donec posuere mauris id mi tempor molestie. Pellentesque eget risus aliquam, ornare tellus eleifend, pellentesque lorem. Donec vulputate sollicitudin tortor sit amet maximus. Duis commodo ipsum non varius sollicitudin. Donec in ornare est, mattis ultricies nisl. Pellentesque hendrerit efficitur mi, tristique sodales massa. Donec vulputate ultrices enim. Sed a fringilla ipsum. Quisque iaculis pellentesque metus ac pulvinar. Etiam rutrum et velit id porttitor. In sit amet sapien consectetur, pulvinar nunc eget, ullamcorper velit. Aenean ac elit purus. Vestibulum in condimentum velit.';

    echo $text;

    $paragraph = explode('.', $text);
    for($i = 0; $i < count($paragraph); $i++) {
        if(!empty($paragraph[$i])) {
            echo "<p>$paragraph[$i].<br></p>";
        }
    }
?>