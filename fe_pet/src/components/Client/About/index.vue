<template>
    <!-- Hero Banner -->
    <div class="position-relative"
        style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1619983139122-5b1a4db8a8d7?auto=format&fit=crop&w=1925&q=80'); background-size: cover; background-position: center; height: 500px;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-white">
                        <h2 class="display-4 fw-bold text-light">Chào mừng đến với PetCare Center</h2>
                        <p class="lead">Nơi thú cưng của bạn được chăm sóc tận tâm với dịch vụ toàn diện và hiện đại nhất</p>
                        <button class="btn btn-danger btn-lg">Khám phá dịch vụ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Về PetCare Center</h2>
                    <div class="d-inline-block bg-danger" style="width: 60px; height: 3px; margin-bottom: 30px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>PetCare Center được thành lập nhằm mang đến những dịch vụ chăm sóc thú cưng chuyên nghiệp và tận
                        tình nhất.</p>
                    <p>Với sứ mệnh "Vì sức khỏe và hạnh phúc của thú cưng", chúng tôi không ngừng cải tiến chất lượng dịch vụ, đầu tư
                        trang thiết bị hiện đại và đội ngũ bác sĩ thú y giàu kinh nghiệm.</p>
                    <p>Hiện tại, PetCare Center đã có mặt tại nhiều thành phố lớn, phục vụ hàng ngàn thú cưng mỗi năm.</p>
                </div>
                <div class="col-md-6">
                    <div class="rounded overflow-hidden">
                        <img src="https://benhvienthucungsamyang.com/wp-content/uploads/2023/01/spa-thu-cung-1.jpg.webp"
                            alt="Hình ảnh PetCare" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="bg-light py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Dịch vụ nổi bật</h2>
                    <div class="d-inline-block bg-danger" style="width: 60px; height: 3px; margin-bottom: 30px;"></div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="mb-3">
                            <i class="bi bi-scissors text-danger fs-1"></i>
                        </div>
                        <h4>Cắt tỉa & Thẩm mỹ</h4>
                        <p class="mb-0">Giúp thú cưng của bạn luôn gọn gàng, sạch đẹp và nổi bật với phong cách riêng.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="mb-3">
                            <i class="bi bi-droplet text-danger fs-1"></i>
                        </div>
                        <h4>Tắm & Chăm sóc da</h4>
                        <p class="mb-0">Sử dụng sản phẩm an toàn, dịu nhẹ, giúp thú cưng sạch sẽ, thơm tho cả ngày.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="mb-3">
                            <i class="bi bi-heart-pulse text-danger fs-1"></i>
                        </div>
                        <h4>Khám & Tiêm chủng</h4>
                        <p class="mb-0">Bảo vệ sức khỏe thú cưng với dịch vụ khám bệnh, tiêm ngừa và tư vấn dinh dưỡng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Section -->
    <div id="technology" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Trang thiết bị hiện đại</h2>
                    <div class="d-inline-block bg-danger" style="width: 60px; height: 3px; margin-bottom: 30px;"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <h3>Chẩn đoán & điều trị chính xác</h3>
                    <p>PetCare trang bị những thiết bị hiện đại hàng đầu:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Máy siêu âm & X-quang kỹ thuật số</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Phòng phẫu thuật vô trùng hiện đại</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Hệ thống xét nghiệm nhanh tại chỗ</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Khu lưu trú tiện nghi cho thú cưng</li>
                    </ul>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="rounded overflow-hidden">
                        <img src="data:image/jpeg;base64,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"
                            alt="Trang thiết bị PetCare" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Section -->
    <div id="locations" class="bg-light py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Hệ thống chi nhánh</h2>
                    <div class="d-inline-block bg-danger" style="width: 60px; height: 3px; margin-bottom: 30px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">PetCare Hà Nội</h5>
                            <p class="card-text">123 Lê Duẩn, Hai Bà Trưng, Hà Nội</p>
                            <p class="mb-0"><i class="bi bi-telephone me-2"></i> 024.3974.8888</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">PetCare Đà Nẵng</h5>
                            <p class="card-text">45 Nguyễn Văn Linh, Hải Châu, Đà Nẵng</p>
                            <p class="mb-0"><i class="bi bi-telephone me-2"></i> 0236.3754.9999</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">PetCare TP.HCM 1</h5>
                            <p class="card-text">65 Lê Lợi, Quận 1, TP.HCM</p>
                            <p class="mb-0"><i class="bi bi-telephone me-2"></i> 028.3821.7777</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">PetCare TP.HCM 2</h5>
                            <p class="card-text">1058 Nguyễn Văn Linh, Quận 7, TP.HCM</p>
                            <p class="mb-0"><i class="bi bi-telephone me-2"></i> 028.3622.5555</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>
