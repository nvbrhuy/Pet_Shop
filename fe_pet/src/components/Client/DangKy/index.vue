<template>
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0"
        style="background-position: center; height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="my-4 text-center"></div>
                    <div class="card d-flex">
                        <div class="card-body flex-full">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="text-uppercase ">Đăng ký tài khoản <b class="text-primary">petcare</b>
                                    </h3>
                                    <p>Bạn đã có tài khoản?
                                        <router-link to="/client/dang-nhap">
                                            <a href="/client/dang-nhap">Đăng nhập tại đây</a>
                                        </router-link>
                                    </p>
                                </div>
                                <div class="form-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">Họ và tên</label>
                                            <input v-model="user.ho_va_ten" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input v-model="user.email" type="email" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Số điện thoại</label>
                                            <input v-model="user.so_dien_thoai" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Số CCCD</label>
                                            <input v-model="user.cccd" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Ngày Sinh</label>
                                            <input v-model="user.ngay_sinh" type="date" class="form-control"
                                                min="1900-01-01" max="2025-12-31">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Mật khẩu</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input v-model="user.password"
                                                    :type="showPassword ? 'text' : 'password'"
                                                    class="form-control border-end-0">
                                                <a href="javascript:;" class="input-group-text bg-transparent"
                                                    @click="showPassword = !showPassword">
                                                    <i :class="showPassword ? 'bx bx-show' : 'bx bx-hide'"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Nhập Lại Mật khẩu</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input v-model="user.re_password"
                                                    :type="showRePassword ? 'text' : 'password'"
                                                    class="form-control border-end-0">
                                                <a href="javascript:;" class="input-group-text bg-transparent"
                                                    @click="showRePassword = !showRePassword">
                                                    <i :class="showRePassword ? 'bx bx-show' : 'bx bx-hide'"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Bằng việc
                                                    đăng ký tài khoản, tôi đồng ý với Điều khoản dịch vụ &amp; Chính
                                                    sách bảo mật của <b>PetCare</b>.</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button v-if="!isLoading" @click="dangKyTaiKhoan()" type="submit"
                                                    class="btn btn-success text-uppercase"><i class="bx bx-user"></i>
                                                    Đăng Ký</button>
                                                <button v-if="isLoading" class="btn btn-success" type="button" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    Đang xử lý...</button>
                                            </div>
                                        </div>
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
import axios from 'axios'
export default {
    data() {
        return {
            user: {},
            showRePassword: false,
            showPassword: false,
            isLoading: false
        }
    },
    methods: {
        dangKyTaiKhoan() {
            this.isLoading = true;
            axios.post('http://127.0.0.1:8000/api/client/dang-ky', this.user)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                    } else {
                        this.$toast.error('Đăng ký tài khoản thất bại');
                    }
                    this.isLoading = false;
                })
                .catch((err) => {
                    const listErr = err.response.data.errors;
                    Object.values(listErr).forEach((error) => {
                        this.$toast.error(error[0]);
                    });
                });
        }
    },
}
</script>
<style></style>