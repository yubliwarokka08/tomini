<!-- Footer -->
<footer class="section-footer font-small">

    <!-- Footer Elements -->
    <div class="container pt-5 pb-5">

        <div class="row justify-content-center">
            <div class="col-lg">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <h5>FEATURES</h5>
                        <ul class="list-unstyled text-light">
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Reviews</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Community</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Social Media Kit</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Affiliates</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>ACCOUNT</h5>
                        <ul class="list-unstyled text-light">
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Refunds</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Security</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Rewards</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>COMPANY</h5>
                        <ul class="list-unstyled text-light">
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Career</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Help Center</a></li>
                            <li><i class="fas fa-angle-double-right mr-2"></i><a href="#">Media</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>GET CONNECTED</h5>
                        <ul class="list-unstyled text-light">
                            <li><i class="fas fa-map-marked-alt mr-2"></i>Office: Luwuk City, Banggai Regency, Central of Celebes, Postal Code 94713</li>
                            <li><i class="fas fa-envelope mr-2"></i><a href="mailto:info@yubliwarokka.web.id">info@yubliwarokka.web.id</a></li>
                            <li><i class="fab fa-whatsapp mr-2"></i>Whatsapp: <a href="https://api.whatsapp.com/send?phone=6281245536677">0812-4553-6677</a></li>
                            <li><i class="fab fa-telegram mr-2"></i>Telegram: <a href="https://t.me/yubliwarokka">0813-5449-1984</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Elements -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Ready to Leave?</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
            <form action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger" type="button" data-dismiss="modal">
                    Batal
                </button>
                <button class="btn btn-success" type="submit">
                    Keluar
                </button>
            </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"><span class="text-muted d-none d-sm-inline-block">© 2020
            Copyright:
            Tomini.Id <i class="fas fa-code text-success mr-1 ml-1"></i> Design by Yubli Audy Warokka</span>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->