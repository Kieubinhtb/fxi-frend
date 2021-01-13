<div class="section before-footer bg-gray">

    <div class="container">

        <h3 class="title-h3">Danh sách sàn Forex cập nhật T<?= date('m/Y') ?></h3>

        <ul class="lastest-updated-list" id="js-more-broker">

            <?php

            foreach ($brokers as $k => $item) {
                if ($k < 60)
                    echo '<li><a href="thong-tin-danh-gia-san-' . $item['slug'] . '">' . $item['name'] . '</a></li>';
            }

            ?>

        </ul>

        <p class="text-center mb-0 mt-5"><a href="javascript:;" onclick="javascript:moreBroker(this)" data-page="2" class="btn btn-more-circle"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a></p>

    </div>

</div>

<script type="text/javascript">
    function moreBroker(el) {
        let p = el.getAttribute('data-page');
        $.ajax({
                method: "GET",
                url: "/site/more-broker",
                data: {
                    page: p,
                }
            })
            .done(function(msg) {
                let json = JSON.parse(msg);
                let str = '';
                if (json.success == true && json.data.items.length > 0) {
                    $.each(json.data.items, function(i, item) {
                        str += '<li><a href="thong-tin-danh-gia-san-' + item.slug + '">' + item.name + '</a></li>';
                    });
                    $('#js-more-broker').append(str);
                    el.setAttribute('data-page', p * 1 + 1);
                }

                if (json.success == false || json.data.items.length < 60) {
                    el.parentElement.remove();
                }
            });
    }
</script>