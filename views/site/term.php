<?php

use app\models\FunPub;

FunPub::createMeta([
    'title' => $data['data']['seo']['title'],
    'description' => $data['data']['seo']['description'],
    'keywords' => $data['data']['seo']['keywords'],
    'image' => '',
    'url' => Yii::$app->params['ssl'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
]);

$this->params['advert_top'] = $data['data']['advert_top']; 
$this->params['advert_popup'] = $data['data']['advert_popup']; 
?>

<div id="contents">

    <div class="container">

        <div class="content-top mw-100 pb-4">

            <h1 class="title-h1">Điều khoản và Điều kiện</h1>

            <p class="text-justify">Chấp nhận Điều khoản và Điều kiện<br>

                Bằng cách sử dụng <a href="/">https://fxinsites.com/</a> (sau đây được gọi là ‘Trang’ hay ‘Chúng tôi’), bạn thể hiện chấp nhận các Điều khoản và Điều kiện này. Nếu bạn không đồng ý với các Điều khoản và Điều kiện này, vui lòng không sử dụng Trang của chúng tôi. Chúng tôi có quyền điều chỉnh, thay đổi hay cập nhật chính sách này bất cứ lúc nào. Chúng tôi khuyến khích khách truy cập xem lại Điều khoản và Điều kiện này thi thoảng. Việc tiếp tục sử dụng Trang sau khi đăng những thay đổi ở các điều khoản này chứng tỏ bạn chấp nhận những sự thay đổi này.</p>

        </div>



        <dl class="dl-list">

            <dt>1. Tài khoản của bạn</dt>

            <dd>Nếu bạn tạo một tài khoản trên Trang, bạn có trách nhiệm duy trì bảo mật cho tài khoản của mình, và bạn hoàn toàn chịu trách nhiệm đối với mọi hoạt động diễn ra trong tài khoản và bất kỳ hành động nào khác được thực hiện liên kết với tài khoản. Bạn đồng ý cung cấp và duy trì thông tin chính xác, hiện hành và hoàn chỉnh, bao gồm thông tin thanh toán và thông tin liên hệ để thông báo và các liên hệ khác từ chúng tôi. Bạn không được dùng thông tin sai lệch hoặc gây hiểu lầm liên quan đến tài khoản của mình.</dd>

            <dt>2. Trách nhiệm của người dùng Trang, Sản phẩm và/hoặc Dịch vụ</dt>

            <dd>

                <p>Việc bạn truy cập, và sử dụng Trang, Sản phẩm và/hoặc Dịch vụ phải hợp pháp và phải tuân theo những Điều khoản này, và bất kỳ thỏa thuận nào khác giữa bạn và chúng tôi.<br>

                    Khi truy cập hay sử dụng Trang, Sản phẩm và/hoặc Dịch vụ, bạn luôn phải cư xử theo cách văn minh và tôn trọng. Chúng tôi đặc biệt nghiêm cấm bất kỳ việc sử dụng Trang, Sản phẩm và/hoặc Dịch vụ nào, và bạn đồng ý không sử dụng Trang, với bất kỳ mục đích nào sau đây:</p>

                <ul>

                    <li>Thực hiện hành vi có thể cấu thành tội hình sự, dẫn đến trách nhiệm dân sự hoặc vi phạm bất kỳ luật hay quy định nào của thành phố, tiểu bang, quốc gia hoặc quốc tế mà không tuân thủ giao thức internet được chấp nhận;</li>

                    <li>Giao tiếp, truyền phát, hay đăng tài liệu đã được đăng ký bản quyền hoặc được sở hữu bởi một bên thứ ba, trừ khi bạn là chủ bản quyền hay được chủ sở hữu cho phép đăng;</li>

                    <li>Giao tiếp, truyền phát, hay đăng tài liệu tiết lộ các bí mật thương mại, trừ khi bạn sở hữu chúng hay được phép của người chủ sở hữu;</li>

                    <li>Giao tiếp, truyền phát, hay đăng tài liệu vi phạm quyền sở hữu trí tuệ, quyền riêng tư hay quyền công khai của người khác;</li>

                    <li>Cố can thiệp theo bất kỳ cách nào với Trang, hay các mạng lưới hay an ninh mạng của chúng tôi, hay cố gắng dùng Trang của chúng tôi để truy cập trái phép vào bất kỳ hệ thống máy tính nào khác;</li>

                    <li>Truy cập dữ liệu không dành cho bạn, hay đăng nhập vào server hay tài khoản, mà bạn không được phép truy cập;</li>

                </ul>

                <p>Ngoài ra, nếu bạn vận hành một tài khoản, đóng góp cho một tài khoản, đăng tài liệu lên Trang, đăng các link lên Trang, hay dùng Trang để cung cấp tài liệu (bất kỳ tài liệu nào như vậy, “Nội dung”), bạn đơn phương chịu trách nhiệm về nội dung, và bất kỳ thiệt hại hay tổn hại nào gây ra từ Nội dung đó, bất kể Nội dung được đề cập có cấu thành văn bản, hình đồ họa, audio file, hay phần mềm máy tính hay không. Bằng cách cung cấp Nội dung, bạn tuyên bố và đảm bảo rằng:</p>

                <ul>

                    <li>Việc download, copy và sử dụng Nội dung sẽ không vi phạm các quyền sở hữu, bao gồm nhưng không giới hạn bản quyền, bằng sáng chế, nhãn hiệu hay quyền bí mật thương mại, của bất kỳ bên thứ ba nào;</li>

                    <li>Bạn đã hoàn toàn tuân thủ mọi giấy phép của bên thứ ba liên quan đến Nội dung, và đã làm mọi việc cần thiết để truyền đạt thành công cho người dùng sau cùng về mọi điều khoản bắt buộc;</li>

                    <li>Nội dung không chứa hay cài đặt virus, worm, phần mềm độc hại, Trojan horses hay các nội dung gây hại và phá hoại khác;</li>

                    <li>Nội dung không dung tục, làm hại danh dự, thù nghịch, phân biệt chủng tộc hay sắc tộc, và không vi phạm quyền riêng tư hay quyền công khai của bất kỳ bên thứ ba nào.</li>

                </ul>

                <p>Bạn có trách nhiệm thực hiện các biện pháp phòng ngừa cần thiết để bảo vệ bản thân và hệ thống máy tính của mình khỏi virus, worm, và các nội dung gây hại hay phá hoại khác. Chúng tôi sẽ thực hiện các biện pháp phòng ngừa hợp lý để ngăn việc truyền tải nội dung có hại từ các hệ thống công nghệ của họ đến các hệ thống công nghệ của bạn. Chúng tôi công khai từ chối bất kỳ trách nhiệm nào đối với tổn hại hay thiệt hại gây ra từ việc bạn truy cập hay dùng Trang, Sản phẩm, và/hoặc Dịch vụ, hoặc truy cập hay sử dụng các trang web của bên thứ ba.<br>

                    Chúng tôi có quyền (mặc dù không phải là nghĩa vụ) (i) từ chối hay gỡ bỏ bất kỳ Nội dung nào mà, theo quan điểm hợp lý của chúng tôi, là vi phạm bất kỳ chính sách nội bộ nào hoặc gây hại hay chống đối, hay (ii) chấm dứt hay từ chối quyền truy cập và sử dụng Trang, Sản phẩm, và/hoặc Dịch vụ, cho bất kỳ người nào với bất kỳ lý do nào, theo quyết định riêng của chúng tôi.</p>

            </dd>

            <dt>3. Phí và thanh toán</dt>

            <dd>Bằng cách mua Sản phẩm và/hoặc Dịch vụ của chúng tôi, bạn đồng ý thanh toán các khoản phí hoặc phí đăng ký gói hàng năm cho Sản phẩm hay Dịch vụ đó. Cấu hình và giá của Trang, Sản phẩm và/hoặc Dịch vụ có thể thay đổi bất cứ lúc nào, và chúng tôi có thể điều chỉnh cấu hình, phí, giá và báo giá, với điều kiện rằng không thay đổi nào về giá được áp dụng cho bạn trong kỳ đăng ký, và chỉ có hiệu lực sau khi bạn đã đồng ý gia hạn, nâng cấp hay làm mới kỳ đăng ký. Bạn đồng ý với bất kỳ thay đổi nào như thế nếu không phản đối bằng văn bản trong vòng bảy (7) ngày làm việc kể từ khi nhận, hay hóa đơn, tích hợp hay thông báo về những thay đổi phí và/hoặc giá. Tất cả các mức giá đều không bao gồm và bạn sẽ thanh toán mọi khoản thuế, phí, lệ phí hay các khoản phí tương tự.</dd>

            <dt>4. Sử dụng nội dung và tài liệu của bên thứ ba</dt>

            <dd>Bằng cách điều hành Trang, chúng tôi không tuyên bố hay ngụ ý xác nhận tài liệu được đăng trên đó, hay rằng trang này tin rằng tài liệu ấy là chính xác, hữu ích hay không có hại. Trang có thể chứa nội dung mang tính xúc phạm, khiếm nhã, hoặc chống đối, cũng như nội dung chứa những thông tin kỹ thuật không chính xác, lỗi đánh máy và các lỗi khác. Trang cũng có thể chứa tài liệu vi phạm quyền riêng tư hay quyền công khai; xâm phạm quyền sở hữu trí tuệ và những quyền sở hữu khác của các bên thứ ba; hay việc download, copy hay sử dụng phải tuân theo các điều kiện hay điều khoản bổ sung, được nêu rõ hay không nêu rõ. Chúng tôi từ chối mọi trách nhiệm đối với bất kỳ thiệt hại và/hoặc tổn hại nào gây ra bởi việc sử dụng hay download các bài đăng của các bên khác trên Trang.</dd>

            <dt>5. Nội dung đăng trên các trang web khác</dt>

            <dd>Chúng tôi không xem trước, và không thể xem trước, mọi tài liệu, bao gồm phần mềm máy tính, được cung cấp thông qua các trang web và trang con mà Trang của chúng tôi liên kết, và liên kết với Trang của chúng tôi. Chúng tôi không có bất kỳ quyền kiểm soát nào đối với các trang web và trang con của các bên thứ ba, và không chịu trách nhiệm đối với nội dung hay việc sử dụng của họ. Bằng cách liên kết với một trang web hay trang con của bên thứ ba, chúng tôi không tuyên bố hay ngụ ý xác nhận trang web hay trang con đó.</dd>

            <dt>6. Vi phạm bản quyền</dt>

            <dd>Chúng tôi khuyến khích bạn tôn trọng quyền sở hữu trí tuệ của những người khác. Nếu bạn tin rằng tài liệu trên Trang hay được liên kết bởi Trang vi phạm bản quyền của bạn, vui lòng thông báo ngay cho Chúng tôi. Chúng tôi sẽ phản hồi với những thông báo ấy, bao gồm thực hiện theo yêu cầu hay biện pháp thích hợp bằng cách xóa tài liệu vi phạm hay vô hiệu hóa mọi liên kết đến tài liệu vi phạm.</dd>

            <dt>7. Chấm dứt</dt>

            <dd>Bạn có thể chấm dứt thỏa thuận của mình và đóng tài khoản với chúng tôi vào bất cứ lúc nào, có hiệu lực vào ngày cuối cùng của kỳ đăng ký, bằng cách gửi email. Chúng tôi có thể chấm dứt quan hệ với bạn, hay có thể chấm dứt hoặc tạm ngưng khả năng truy cập Trang, Sản phẩm, và/hoặc Dịch vụ vào bất cứ lúc nào, bao gồm việc sử dụng bất kỳ phần mềm nào, (i) nếu bạn vi phạm những Điều khoản này; (ii) nếu Chúng tôi nghi ngờ một cách hợp lý rằng bạn đang dùng Trang, Sản phẩm, và/hoặc Dịch vụ để vi phạm luật hay vi phạm quyền của bên thứ ba; (iii) nếu bạn không thanh toán bất kỳ khoản nào đến hạn cho Chúng tôi; (iv) bạn vi phạm bất kỳ luật hay quy định áp dụng nào. Khi chấm dứt tài khoản của bạn vì những nguyên nhân trên, sẽ không hoàn phí và bạn sẽ bị từ chối truy cập Trang, Sản phẩm và/hoặc Dịch vụ, bao gồm toàn bộ dữ liệu trong đó. Nếu bạn tin rằng chúng tôi đã không thực hiện hay Dịch vụ bị lỗi, bạn phải thông báo cho chúng tôi bằng văn bản và cho phép mười bốn (14) ngày để sửa lỗi. Nếu Chúng tôi không sửa lỗi trong khoản thời gian sửa chữa, bạn có thể chấm dứt gói đăng ký và có hiệu quả tức thì, khi gửi thông báo bằng văn bản cho chúng tôi.</dd>

            <dt>8. Thay đổi</dt>

            <dd>Cấu hình và đặc tính kỹ thuật của Trang, bao gồm và không giới hạn mọi nội dung hiện có, Sản phẩm, và Dịch vụ có thể được thay đổi và/hoặc cập nhật thỉnh thoảng, theo quyết định riêng của chúng tôi. Bạn bị ràng buộc bởi bất kỳ thay đổi hay cập nhật nào như thế, trừ khi những thay đổi đó làm giảm đáng kể chức năng và giá trị của Trang, Sản phẩm và/hoặc Dịch vụ.</dd>

            <dt>9. Lưu ý đặc biệt liên quan đến trẻ em</dt>

            <dd>Trang không được thiết kế hay dành cho trẻ em dưới 16 tuổi, và Sản phẩm, Dịch vụ của chúng tôi không thể được mua bởi trẻ em dưới 16 tuổi. Chúng tôi chủ ý thu thập thông tin cá nhân từ những khách truy câp dưới 16 tuổi. Nếu bạn dưới 16 tuổi, bạn không được phép gửi bất kỳ thông tin cá nhân nào cho chúng tôi. Nếu bạn dưới 16 tuổi, bạn chỉ nên dùng Trang khi có sự đồng ý của phụ huynh hoặc người giám hộ.</dd>

            <dt>10. Giới hạn Bảo hành</dt>

            <dd>Chúng tôi và những người cấp phép không đảm bảo hay đại diện cho bất kỳ điều gì liên quan đến Trang, Sản phẩm, và Dịch vụ, hay bất kỳ trang liên kết nào hay nội dung của trang đó, bao gồm nội dung, thông tin và tài liệu trên đó hay độ chính xác, hoàn thiện hay tính kịp thời của nội dung, thông tin và tài liệu. Chúng tôi cũng không đảm bảo hay tuyên bố rằng việc bạn truy cập hay sử dụng Trang, Sản phẩm và/hoặc Dịch vụ, hay bất kỳ trang liên kết nào, sẽ không bị gián đoạn hoặc không có lỗi hay thiếu sót, rằng những khiếm khuyết sẽ được điều chỉnh, hay rằng Trang, Sản phẩm, và/hoặc Dịch vụ, hay bất kỳ trang liên kết nào đều sẽ không có virus máy tính hay các yếu tố gây hại khác. Chúng tôi không chịu trách nhiệm, và sẽ không có trách nhiệm đối với bất kỳ thiệt hại nào đối với, hay các virus có thể ảnh hưởng, đến thiết bị máy tính của bạn hay tài sản khác với tài khoản mà bạn sử dụng Sản phẩm hay Dịch vụ, hay việc bạn truy cập, sử dụng, hay duyệt Trang, hay việc bạn download hay upload bất kỳ Nội dung nào từ hoặc đến Trang. Nếu bạn không thỏa mãn với Trang, biện pháp duy nhất của bạn là ngưng sử dụng Trang.<br>

                Không lời khuyên, kết quả hay thông tin nào, dù dạng nói hay văn bản, mà bạn có được từ Chúng tôi, hay thông qua Trang, có thể tạo ra bất kỳ sự bảo đảm nào không được đưa ra rõ ràng ở đây. Chúng tôi không nhất thiết xác nhận, hỗ trợ, xử phạt, khuyến khích hay đồng ý với bất kỳ nội dung nào hay nội dung người dùng nào, hay bất kỳ quan niệm, đề xuất, nội dung, link, dữ liệu hay lời khuyên nào được thể hiện hay ngụ ý trong đó, và Chúng tôi công khai từ chối bất kỳ và mọi trách nhiệm liên kết với nội dung người dùng và bất kỳ nội dung người dùng nào, tài liệu hay thông tin khả dụng trên hay khắp Trang, Sản phẩm, và/hoặc Dịch vụ của chúng tôi, được tạo hay cung cấp bởi những người dùng hay các bên thứ ba khác.</dd>

            <dt>11. Giới hạn trách nhiệm</dt>

            <dd>Trong bất kỳ hoàn cảnh nào, bất kỳ bên nào, các công ty con và công ty liên kết của họ, giám đốc, viên chức, nhân viên hay đại lý, và những người đại diện của họ, phải chịu trách nhiệm về bất kỳ thiệt hại gián tiếp, do hậu quả, ngẫu nhiên, đặc biệt, hay do bị phạt, bao gồm nhưng không giới hạn việc mất lợi nhuận và gián đoạn kinh doanh, dù trong hợp đồng hay trong vi phạm, bao gồm sơ suất, phát sinh theo bất kỳ cách nào từ việc sử dụng Trang, Sản phẩm, Dịch vụ, và/hoặc Nội dung của họ, hay của bất kỳ trang web siêu liên kết nào ngay cả khi bên đó được thông báo rõ ràng về khả năng của những tổn hại đó. Ngoại trừ những thiệt hại liên quan đến việc vi phạm quyền sở hữu trí tuệ đã được chứng minh hoặc thừa nhận một cách hợp pháp gây ra bởi Sản phẩm và/hoặc Dịch vụ do một bên phân phối mà không có bất kỳ nội dung bên thứ ba nào thì trong mọi trường hợp, trách nhiệm của một bên sẽ không vượt quá tổng số tiền nhận được bởi Chúng tôi từ bạn trong khoảng thời gian sáu (6) tháng ngay trước ngày xảy ra thiệt hại.</dd>

            <dt>12. Tuyên bố và bảo đảm của bạn</dt>

            <dd>Bạn tuyên bố và bảo đảm rằng việc sử dụng Trang, Sản phẩm, và/hoặc Dịch vụ sẽ tuân theo bất kỳ thỏa thuận nào giữa bạn và Chúng tôi, Chính sách Quyền riêng tư, các Điều khoản này, và với bất kỳ luật và quy định áp dụng nào, bao gồm nhưng không giới hạn bất kỳ luật hay quy định nội bộ nào ở quốc gia, tiểu bang, thành phố, hay khu vực khác của chính phủ, liên quan đến hành vi trực tuyến và nội dung được chấp nhận, và bao gồm tất cả các luật hiện hành liên quan đến việc truyền tải dữ liệu kỹ thuật được xuất từ quốc gia mà bạn cư trú, và với bất kỳ chính sách hoặc điều khoản và điều kiện hiện hành nào khác.</dd>

            <dt>13. Bồi thường</dt>

            <dd>Theo các giới hạn được nêu ở đây, các Bên đồng ý bảo vệ, bồi thường và không gây tổn hại cho nhau, bao gồm các công ty con và chi nhánh của mình, giám đốc, cán bộ, nhân viên hoặc đại lý tương ứng của họ, cùng các đại diện khác, khỏi mọi khiếu nại, tổn thất, thiệt hại, trách nhiệm pháp lý và chi phí (bao gồm nhưng không giới hạn phí luật sư hợp lý và chi phí tòa án), phát sinh từ, liên quan đến hoặc kết nối với (i) vi phạm nghiêm trọng các Điều khoản này, hoặc bất kỳ thỏa thuận nào giữa các Bên, hoặc ( ii) mọi cáo buộc rằng bất kỳ thông tin hoặc tài liệu nào (bao gồm bất kỳ Nội dung nào) vi phạm bất kỳ quyền nào của bất kỳ bên thứ ba nào.<br>

                Bạn hiểu và đồng ý rằng, bằng cách sử dụng Sản phẩm và/hoặc Dịch vụ, bạn hoàn toàn chịu trách nhiệm về bất kỳ dữ liệu nào, bao gồm thông tin nhận dạng cá nhân, được thu thập hoặc xử lý thông qua Sản phẩm và/hoặc Dịch vụ của chúng tôi. Bạn sẽ bảo vệ, bồi thường và không gây hại cho Chúng tôi, mà không giới hạn, đối với tất cả những thiệt hại liên quan đến (được cho là) vi phạm bất kỳ luật bảo mật nào thông qua việc sử dụng Sản phẩm và/hoặc Dịch vụ trong tài khoản của bạn</dd>

            <dt>14. Điều khoản khác</dt>

            <dd>Nếu bất kỳ phần nào của Điều khoản này không hợp lệ hoặc không thể thi hành, phần đó sẽ được hiểu là phản ánh ý định ban đầu của các Bên, và các phần còn lại sẽ vẫn có đầy đủ hiệu lực. Việc một bên từ bỏ bất kỳ điều khoản hoặc điều kiện nào của các Điều khoản này hoặc bất kỳ vi phạm nào trong đó, trong bất kỳ trường hợp nào, cũng sẽ không từ bỏ điều khoản hoặc điều kiện đó hay bất kỳ vi phạm nào sau đó. Bạn chỉ có thể chuyển nhượng các quyền của mình theo những Điều khoản này cho bất kỳ bên nào đồng thuận, và đồng ý bị ràng buộc bởi các điều khoản trong đây bằng văn bản. Chúng tôi có thể chỉ định các quyền theo những Điều khoản này theo quyết định riêng của mình. Các Điều khoản này sẽ ràng buộc và đảm bảo lợi ích của các bên, những người kế thừa của họ và những người được chỉ định. Bạn đồng ý rằng không có mối quan hệ liên doanh, đối tác, việc làm hoặc đại lý nào tồn tại giữa bạn và chúng tôi như một kết quả của các Điều khoản, hoặc việc bạn sử dụng Trang web, Sản phẩm và/hoặc Dịch vụ.</dd>

        </dl>

    </div>

</div>

<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>