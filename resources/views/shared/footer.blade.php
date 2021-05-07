<!-- footer.html  -->
<footer class="fixed-bottom footerHeigth">
    <div class="row container-fluid justify-content-between">
        <div class="my-auto pl-3">
            <span class="color_Blue small"><i class="fab fa-facebook a"></i></span>
            <a class="font-weight-light color_Blue small" href="https://www.facebook.com/ThomasMoreBE" target="_blank">Thomas
                More</a>
        </div>
        <div class="pt-3"><p data-toggle="tooltip" data-placement="center"
                             title="OHO-Team-03" class="small">
                &COPY;{{ now()->year }}
                <span>OHO-TEAM-03</span></p>
        </div>
        <div class="my-auto">
            <a href="#aboutmodal" class="small" data-toggle="modal" data-target="#aboutmodal">About</a>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="aboutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content p-3 aboutmodal" style="border-radius: 30px; background-color: #575757">
            <div class="color_TMGrey">
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle color_LightGray"></i>
                </button>
                <h5 class="modal-title pb-3 color_Gray" id="exampleModalLabel">About</h5>
                <h4 class="color_Gray">Development team</h4>
                <ul class="color_Gray">
                    <li> Erwin Van Moorleghem</li>
                    <li> Alex Swaan</li>
                    <li> Maarten Willoqué</li>
                </ul>
                <h4 class="color_Gray">Opdrachtgever</h4>
                <ul class="color_Gray">
                    <li> Christel Maes</li>
                </ul>
            </div>
        </div>
    </div>
</div>


