<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-primary nav-fill text-center" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#profile" role="tab"
                                aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Thông Tin Cá Nhân</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#changepassword" role="tab"
                                aria-selected="false" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Đổi Mật Khẩu</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade active show" id="profile" role="tabpanel">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="">Họ và tên</label>
                                        <input type="text" class="form-control mt-2" v-model="user.ho_va_ten">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control mt-2" v-model="user.email" disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="">Ngày sinh</label>
                                        <input type="date" class="form-control mt-2" v-model="user.ngay_sinh">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" class="form-control mt-2" v-model="user.so_dien_thoai"
                                            maxlength="10">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 text-end">
                                    <button class="btn btn-success">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="changepassword" role="tabpanel">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-lg-6 border-end">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-3 mt-2">
                                                    <label class="form-label">Mật Khẩu Hiện Tại</label>
                                                    <input v-model="doi_mat_khau.password" type="text"
                                                        class="form-control" placeholder="Nhập mật khẩu cũ">
                                                </div>
                                                <div class="mb-3 mt-2">
                                                    <label class="form-label">Mật Khẩu Mới</label>
                                                    <div class="input-group">
                                                        <input :type="isShow ? 'text' : 'password'"
                                                            v-model="doi_mat_khau.new_password" class="form-control"
                                                            placeholder="Nhập mật khẩu mới" required>
                                                        <button type="button"
                                                            class="btn btn-outline-secondary password-toggle"
                                                            @click="doiMat()">
                                                            <i :class="isShow ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Xác Nhận Mật Khẩu</label>
                                                    <div class="input-group">
                                                        <input :type="isShow ? 'text' : 'password'"
                                                            v-model="doi_mat_khau.confirm_password" class="form-control"
                                                            placeholder="Nhập xác nhận mật khẩu mới" required>
                                                        <button type="button"
                                                            class="btn btn-outline-secondary password-toggle"
                                                            @click="doiMat()">
                                                            <i :class="isShow ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-end">
                                                    <router-link to="/client/quen-mat-khau">
                                                        Quên mật khẩu
                                                    </router-link>
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-primary"
                                                        v-on:click="doiMatKhau()">Đổi Mật
                                                        Khẩu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="https://cdn.tgdd.vn/Files/2019/12/07/1225665/huong-dan-thay-doi-mat-khau-tai-khoan-google-don-gian-tren-dien-thoai-may-tinh-7.jpg"
                                            class="card-img login-img" alt="..." style="height: 325px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            user: {},
            doi_mat_khau: {}
        }
    },
    mounted() {
        this.getThongTin();
    },
    methods: {
        getThongTin() {
            axios
                .get('http://127.0.0.1:8000/api/admin/thong-tin', {
                    headers: {
                        Authorization: 'Bearer ' + localStorage.getItem("key_admin")
                    }
                })
                .then((res) => {
                    this.user = res.data.data
                })
        },
        doiMatKhau() {
            axios
                .post('http://127.0.0.1:8000/api/admin/doi-mat-khau', this.doi_mat_khau, {
                    headers: {
                        Authorization: 'Bearer ' + localStorage.getItem("key_client")
                    }
                })
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.doi_mat_khau = {};

                    } else {
                        this.$toast.error(res.data.message)
                    }
                })
        },
    },
}
</script>
<style></style>