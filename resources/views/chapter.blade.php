@extends('base')

@section('container')
    <section class="container">
        <ul class="breadcrumb">
            <li><a href="https://www.a3manga.com"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
            <li><a href="https://www.a3manga.com/truyen-tranh/cam-ly-quy/">Cẩm Lý Quy</a></li>
            <li class="active"><a href="https://www.a3manga.com/cam-ly-quy-chap-5/">Cẩm Lý Quy – Chap 5</a></li>
        </ul>
        <h2 class="info-title single-title text-center"> Cẩm Lý Quy – Chap 5</h2>
        <div class="text-center select-chapter">
            <div class="btn-group single-select-group">
                <button type="button" class="select-button btn-snazzy light-green dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Chọn chapter <span class="down-icon"><i class="glyphicon glyphicon-chevron-down"></i></span> </button>
                <ul class="dropdown-menu chap-selecter" role="menu">
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-5/">Cẩm Lý Quy – Chap 5</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-4/">Cẩm Lý Quy – Chap 4</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-3/">Cẩm Lý Quy – Chap 3</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-2/">Cẩm Lý Quy – Chap 2</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-1/">Cẩm Lý Quy – Chap 1</a></li>
                </ul>
            </div>
            <div class="block-15px"></div> <a class="btn-snazzy light-blue" id="prev-link" href="https://www.a3manga.com/cam-ly-quy-chap-4/">← Chap trước</a> <a class="btn-snazzy light-blue" id="next-link" href="#">Chap sau →</a>
            <button id="s-s-btn" type="button" class="btn-snazzy red"><i class="glyphicon glyphicon-cog"></i> <span class="hidden-xs">Đổi server ảnh</span></button>
        </div>
        <div class="like-share-top text-center">
            <div class="fb-like fb_iframe_widget" data-href="https://www.a3manga.com/cam-ly-quy-chap-5/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=988671374579758&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="fc31549d5fc00c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/like.php?action=like&amp;app_id=988671374579758&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0sTQzbapM8j.js%3Fversion%3D42%23cb%3Df2e68129d2ee3f4%26domain%3Dwww.a3manga.com%26origin%3Dhttps%253A%252F%252Fwww.a3manga.com%252Ff1dc3673eb2b6a4%26relation%3Dparent.parent&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></div> &nbsp;
            <div class="fb-send fb_iframe_widget" data-href="https://www.a3manga.com/cam-ly-quy-chap-5/" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=988671374579758&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;locale=vi_VN&amp;sdk=joey"><span style="vertical-align: bottom; width: 47px; height: 20px;"><iframe name="f266951f4ad5b54" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:send Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/send.php?app_id=988671374579758&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0sTQzbapM8j.js%3Fversion%3D42%23cb%3Df2e13c7a4788544%26domain%3Dwww.a3manga.com%26origin%3Dhttps%253A%252F%252Fwww.a3manga.com%252Ff1dc3673eb2b6a4%26relation%3Dparent.parent&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 47px; height: 20px;" class=""></iframe></span></div> &nbsp;
            <div class="d-inline hidden-xs"><span class="PIN_1504597570933_button_pin PIN_1504597570933_beside PIN_1504597570933_save PIN_1504597570933_padded" data-pin-log="button_pinit_bookmarklet" data-pin-href="https://www.pinterest.com/pin/create/button/" data-pin-x="0"><span class="PIN_1504597570933_count" data-pin-href="https://www.pinterest.com/pin/create/button/" data-pin-log="button_pinit_bookmarklet" data-pin-x="0">0</span>Lưu</span>
            </div> &nbsp;
            <div class="d-inline hidden-xs">
                <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;">
                    <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1504597570699" name="I0_1504597570699" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fwww.a3manga.com&amp;url=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.RZKvKmzJOL8.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPFZM6jtvLb-jsYZkaz34D_6a9rmg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1504597570699&amp;parent=https%3A%2F%2Fwww.a3manga.com&amp;pfname=&amp;rpctoken=21866149" data-gapiattached="true" title="G+"></iframe>
                </div>
            </div>
        </div>
        <div class="widget text-center force-center more-a">



        </div>
    </section>

    <section id="view-chapter" class="text-center view-chapter"> <img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-740RXrcajxU/Wa18ta3EI0I/AAAAAAACUb4/gRxDL3N-5acE5ApCrtPcrPHR3viVxymCgCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%25281%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;">



        <img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-bimHRLYEmFA/Wa18xpf3OKI/AAAAAAACUdM/_CZrXUgUlQwLrYaMDf5-l7NePynqRVrWQCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%25285%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;">
        <img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-ELebpRJEkLI/Wa18x2p9C7I/AAAAAAACUdQ/t3yF9jiNlsUc2CnqO-nEKrdiN8tx35sMQCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%25286%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;">
        <img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-7Tz_BTwClVI/Wa18yPSRwSI/AAAAAAACUdU/L1l3LgBSQ8cDTXMgtQLqT8bSeWM4FqVEQCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%25287%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-S8L-UIbrTpk/Wa18ydEzuoI/AAAAAAACUdY/b5F73ArfUs4WjpC0wx2qFpwC2JWrsX_nwCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%25288%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-8Vf0TUgkn4g/Wa18zn7SRQI/AAAAAAACUdc/iXrQVjEaq3IdvYDq_DWRpKGDaJ0UWP2XwCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%25289%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-4UXzvO26dtI/Wa18tUVnmcI/AAAAAAACUcA/rfYZwdVVDUIQPsi5Rmfl85PHqFPq8ofYwCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252810%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-_BKlpv1LjWM/Wa18tTt_YnI/AAAAAAACUb8/k_tbwFO_by0wWITVkMvtW9LjWuJNkauIACLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252811%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-BdaKGX1fLa4/Wa18uEda_bI/AAAAAAACUcE/2kqpACTDPqweUO7hpv03yKzBb_X-k6r8wCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252812%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-hl7Luc0TYUU/Wa18uGKjNqI/AAAAAAACUcI/ejwCatUxP_MxMtc2CETDbQuONO3tMN6cwCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252813%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-MbxzT2oIbvY/Wa18uO40nDI/AAAAAAACUcM/qAIgL4C-8gsfujgZmbvfXTzT81MBdyIGQCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252814%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-Em8u7HqEYAM/Wa18ujkMN9I/AAAAAAACUcQ/q-Qmbw_m8Pcz2OHcjPIGm332zy2-8A_6ACLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252815%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-nJpcYFlIqwk/Wa18uqzC8ZI/AAAAAAACUcU/HyyLyCJj2ispkMrNOgmQ6cJ_0ce4TJlXgCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252816%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-vQin0PLrmTY/Wa18ulsOqtI/AAAAAAACUcY/fchOkfD2vh0eLfww4CgLi2gPcDRXCgc-QCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252817%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-lDU6FTUdubM/Wa18vGK3aKI/AAAAAAACUcc/qnBCnJpmPDIvJd8j60Ml-b4LA-43iJOewCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252818%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-Z6hxrIrSlMs/Wa18vXVjnQI/AAAAAAACUck/-73NmwK7QkMSZhVNb8F5NkcD6QQpgRxggCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252819%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-UHJWPcqu2K8/Wa18v2HKJZI/AAAAAAACUco/PExKLQseXmcuN2gdUS2NsCppcnoWbFTjQCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252820%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-jF6iFlu6IoA/Wa18vz_e4QI/AAAAAAACUcs/2dY6wnYra58k29h4wOLoe4eD3Ugnxk9YwCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252821%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-acxcyhJBJI8/Wa18vz9l_RI/AAAAAAACUcw/HOjllqYE5aUxFtaZ_5cHRLoL9y7Vd97TACLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252822%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-TEFRWlwFiFw/Wa18whgc_dI/AAAAAAACUc0/mfo5J-sy6t42fCAJ3wQO8I0yU7chYFVCQCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252823%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-9smsbG6yK8c/Wa18wuj___I/AAAAAAACUc4/GlkEj_D6HQEx8iyY0g0DtwPqqNuul3F2wCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252824%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-tzPKjOvR_lE/Wa18wvip-WI/AAAAAAACUc8/fcpfl-GZBDsIWyKGYk4UJEGG949uRJ9ygCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252825%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;gadget=a&amp;no_expand=1&amp;resize_h=0&amp;rewriteMime=image/*&amp;url=https://lh3.googleusercontent.com/-XCgNUGH9_E4/Wa18xE2i92I/AAAAAAACUdA/qajbkh_pb8YHuoQHZ0nckKw9kYzrqsRcwCLcBGAs/s0/CamLyQuy_Chap5_A3manga%2B%252826%2529.jpg" alt="Cẩm Lý Quy Chap 5" style="width: 900px;">
    </section>

    <section class="container">
        <div class="like-share-bottom text-center">
            <div class="fb-like fb_iframe_widget" data-href="https://www.a3manga.com/cam-ly-quy-chap-5/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=988671374579758&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f3cd3fe43c35fd" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/like.php?action=like&amp;app_id=988671374579758&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0sTQzbapM8j.js%3Fversion%3D42%23cb%3Df68bd91fc6c334%26domain%3Dwww.a3manga.com%26origin%3Dhttps%253A%252F%252Fwww.a3manga.com%252Ff1dc3673eb2b6a4%26relation%3Dparent.parent&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></div> &nbsp;
            <div class="fb-send fb_iframe_widget" data-href="https://www.a3manga.com/cam-ly-quy-chap-5/" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=988671374579758&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;locale=vi_VN&amp;sdk=joey"><span style="vertical-align: bottom; width: 47px; height: 20px;"><iframe name="f1a4c8deb9d2684" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:send Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/send.php?app_id=988671374579758&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0sTQzbapM8j.js%3Fversion%3D42%23cb%3Df32142b8856bf8%26domain%3Dwww.a3manga.com%26origin%3Dhttps%253A%252F%252Fwww.a3manga.com%252Ff1dc3673eb2b6a4%26relation%3Dparent.parent&amp;container_width=980&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 47px; height: 20px;" class=""></iframe></span></div> &nbsp;
             &nbsp;
            <div class="d-inline hidden-xs">
                <div id="___plusone_1" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;">
                    <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I1_1504597570701" name="I1_1504597570701" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fwww.a3manga.com&amp;url=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.RZKvKmzJOL8.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPFZM6jtvLb-jsYZkaz34D_6a9rmg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I1_1504597570701&amp;parent=https%3A%2F%2Fwww.a3manga.com&amp;pfname=&amp;rpctoken=29106657" data-gapiattached="true" title="G+"></iframe>
                </div>
            </div>
        </div>
        <div class="block-15px"></div>
        <div class="text-center select-chapter"> <a class="btn-snazzy light-blue" href="https://www.a3manga.com/cam-ly-quy-chap-4/">← Chap trước</a> <a class="btn-snazzy light-blue" href="#">Chap sau →</a>
            <div class="block-15px"></div>
            <div class="btn-group single-select-group">
                <button type="button" class="select-button btn-snazzy light-green dropdown-toggle" data-toggle="dropdown"> Chọn chapter <span class="down-icon"><i class="glyphicon glyphicon-chevron-down"></i></span> </button>
                <ul class="dropdown-menu chap-selecter" role="menu">
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-5/">Cẩm Lý Quy – Chap 5</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-4/">Cẩm Lý Quy – Chap 4</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-3/">Cẩm Lý Quy – Chap 3</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-2/">Cẩm Lý Quy – Chap 2</a></li>
                    <li><a href="https://www.a3manga.com/cam-ly-quy-chap-1/">Cẩm Lý Quy – Chap 1</a></li>
                </ul>
            </div>
            <div class="block-15px"></div>
            <form action="https://docs.google.com/forms/d/1sVDrOZOcNgVBXVboJsT08CneXVDPw9jt0boUWRU6Qxc/formResponse" method="POST" target="_blank" id="ss-form">
                <input type="hidden" name="entry.2025259344" value="Cẩm Lý Quy – Chap 5" id="entry_2025259344">
                <input type="hidden" name="entry.1037048843" value="https://www.a3manga.com/cam-ly-quy-chap-5/" id="entry_1037048843">
                <button type="submit" class="btn-snazzy red"><i class="glyphicon glyphicon-exclamation-sign"></i> Báo truyện hỏng</button>
            </form>
        </div>
        <div class="widget text-center force-center more-a">


        </div>
        <div class="widget">
            <div class="bs-callout bs-callout-danger info">
                <h4>Thích truyện của A3 Manga?</h4>
                <p> Theo dõi <a href="https://www.facebook.com/a3manga" target="_blank" rel="nofollow">A3 Manga trên Facebook</a> để cập nhật thông tin <a href="https://www.a3manga.com/" target="_blank">truyện tranh</a> sớm nhất! Vui lòng xem <a href="https://www.a3manga.com/mot-so-thong-tin-co-ban" target="_blank" rel="nofollow">một số thông tin cơ bản</a> trước khi đặt câu hỏi cho nhóm.
                    <br> Hướng dẫn <a href="https://www.a3manga.com/sua-loi-khong-xem-duoc-truyen/" target="_blank">sửa lỗi không xem được truyện</a>.</p>
            </div>
        </div>
        <div>
            <h3 class="org-title">Bình luận</h3>
            <div class="row">
                <div class="col-md-6 margin-bottom-15px">
                    <div class="fb-comments fb_iframe_widget" data-href="https://www.a3manga.com/cam-ly-quy-chap-5/" data-numposts="100" data-colorscheme="light" data-width="475" fb-xfbml-state="rendered"><span style="height: 252px; width: 475px;"><iframe id="f1c4bc69bafbfb" name="fc6ccd1860fb78" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=988671374579758&amp;channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0sTQzbapM8j.js%3Fversion%3D42%23cb%3Df3b116899e0278%26domain%3Dwww.a3manga.com%26origin%3Dhttps%253A%252F%252Fwww.a3manga.com%252Ff1dc3673eb2b6a4%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=https%3A%2F%2Fwww.a3manga.com%2Fcam-ly-quy-chap-5%2F&amp;locale=vi_VN&amp;numposts=100&amp;sdk=joey&amp;skin=light&amp;version=v2.10&amp;width=475" style="border: none; overflow: hidden; height: 252px; width: 475px;"></iframe></span></div>
                </div>
                <div class="col-md-6 margin-bottom-15px">
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        var disqus_url = 'https://www.a3manga.com/cam-ly-quy-chap-5/';
                        var disqus_identifier = '1107401 https://www.a3manga.com/?p=1107401';
                        var disqus_container_id = 'disqus_thread';
                        var disqus_shortname = 'a3manga';
                        var disqus_title = "Cẩm Lý Quy – Chap 5";
                        var disqus_config_custom = window.disqus_config;
                        var disqus_config = function() {
                            this.language = '';
                            if (disqus_config_custom) {
                                disqus_config_custom.call(this);
                            }
                        };
                        (function() {
                            var dsq = document.createElement('script');
                            dsq.type = 'text/javascript';
                            dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <div class="keywords"> Từ khóa: <a href="https://www.a3manga.com/cam-ly-quy-chap-5/">đọc truyện cẩm lý quy chap 5</a>, <a href="https://www.a3manga.com/cam-ly-quy-chap-5/">truyện tranh cẩm lý quy chap 5</a>, <a href="https://www.a3manga.com/cam-ly-quy-chap-5/">cẩm lý quy chap 5 tiếng việt</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection