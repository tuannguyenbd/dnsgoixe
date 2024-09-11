<?php

//default responses
const DEFAULT_200 = [
    'response_code' => 'default_200',
    'message' => 'Đã tải thành công'
];

const DEFAULT_SENT_OTP_200 = [
    'response_code' => 'default_200',
    'message' => 'Đã gửi OTP thành công'
];

const DEFAULT_VERIFIED_200 = [
    'response_code' => 'default_verified_200',
    'message' => 'Đã xác minh thành công'
];

const DEFAULT_EXPIRED_200 = [
    'response_code' => 'default_expired_200',
    'message' => 'Đã hết hạn'
];

const COUPON_404 = [
    'response_code' => 'coupon_404',
    'message' => 'không tìm thấy phiếu giảm giá'
];

const DEFAULT_PASSWORD_RESET_200 = [
    'response_code' => 'default_password_reset_200',
    'message' => 'Đặt lại mật khẩu thành công'
];

const DEFAULT_PASSWORD_CHANGE_200 = [
    'response_code' => 'default_password_change_200',
    'message' => 'Thay đổi mật khẩu thành công'
];

const DEFAULT_PASSWORD_MISMATCH_403 = [
    'response_code' => 'default_password_mismatch_403',
    'message' => 'Mật khẩu không khớp với mật khẩu trước'
];

const NO_CHANGES_FOUND = [
    'response_code' => 'no_changes_found_200',
    'message' => 'Không tìm thấy thay đổi nào'
];

const DEFAULT_204 = [
    'response_code' => 'default_204',
    'message' => 'Không tìm thấy thông tin'
];

const NO_DATA_200 = [
    'response_code' => 'no_data_found_200',
    'message' => 'Không tìm thấy dữ liệu'
];
const DEFAULT_400 = [
    'response_code' => 'default_400',
    'message' => 'Thông tin không hợp lệ'
];

const DEFAULT_401 = [
    'response_code' => 'default_401',
    'message' => 'Thông tin xác thực không khớp'
];

const DEFAULT_EXISTS_203 = [
    'response_code' => 'default_exists_203',
    'message' => 'Nguồn đã tồn tại'
];

const DEFAULT_USER_REMOVED_401 = [
    'response_code' => 'default_user_removed_401',
    'message' => 'Người dùng đã bị xóa, vui lòng liên hệ với quản trị viên'
];

const USER_404 = [
    'response_code' => 'user_404',
    'message' => 'Không tìm thấy người dùng'
];

const DEFAULT_USER_UNDER_REVIEW_DISABLED_401 = [
    'response_code' => 'default_user_under_review_or_disabled_401',
    'message' => 'Tài khoản đang xem xét'
];

const DEFAULT_USER_DISABLED_401 = [
    'response_code' => 'default_user_disabled_401',
    'message' => 'Người dùng đã bị vô hiệu, vui lòng liên hệ với quản trị viên'
];

const DEFAULT_403 = [
    'response_code' => 'default_403',
    'message' => 'Quyền truy cập của bạn đã bị từ chối'
];
const WITHDRAW_METHOD_INFO_EXIST_403 = [
    'response_code' => 'withdraw_method_info_exist_403',
    'message' => 'Phương thức rút tiền đã tồn tại.'
];

const DEFAULT_NOT_ACTIVE = [
    'response_code' => 'default_not_active_200',
    'message' => 'Dữ liệu được truy xuất không hoạt động'
];


const DEFAULT_404 = [
    'response_code' => 'default_404',
    'message' => 'Không tìm thấy'
];

const TRIP_REQUEST_PAUSED_404 = [
    'response_code' => 'trip_request_paused_404',
    'message' => 'Chuyến đi bị tạm dừng, không thể cập nhật trạng thái'
];

const OFFLINE_403 = [
    'response_code' => 'offline_403',
    'message' => 'Không thể tắt app khi chuyến đang chạy',
];

const AMOUNT_400 = [
    'response_code' => 'amount_400',
    'message' => 'Số tiền yêu cầu lớn hơn số tiền có sẵn'
];

const DEFAULT_DELETE_200 = [
    'response_code' => 'default_delete_200',
    'message' => 'Xóa thông tin thành công'
];

const DEFAULT_FAIL_200 = [
    'response_code' => 'default_fail_200',
    'message' => 'Đã thất bại'
];

const DEFAULT_PAID_200 = [
    'response_code' => 'default_paid_200',
    'message' => 'Đã thanh toán'
];

const DEFAULT_LAT_LNG_400 = [
    'response_code' => 'default_lat_lng_400',
    'message' => 'Điểm đón hoặc điểm đến bị sai!'
];



const DEFAULT_STORE_200 = [
    'response_code' => 'default_store_200',
    'message' => 'Thêm thành công'
];

const DEFAULT_UPDATE_200 = [
    'response_code' => 'default_update_200',
    'message' => 'Cập nhật thành công'
];

const DEFAULT_RESTORE_200 = [
    'response_code' => 'default_restore_200',
    'message' => 'Đã khôi phục thành công'
];

const DEFAULT_STATUS_UPDATE_200 = [
    'response_code' => 'default_status_update_200',
    'message' => 'Cập nhật trạng thái thành công'
];

const TOO_MANY_ATTEMPT_403 = [
    'response_code' => 'too_many_attempt_403',
    'message' => 'Đã vượt quá giới hạn lượt truy cập của bạn, hãy thử lại sau một phút.'
];


const REGISTRATION_200 = [
    'response_code' => 'registration_200',
    'message' => 'Đăng ký thành công'
];

//auth module
const AUTH_LOGIN_200 = [
    'response_code' => 'auth_login_200',
    'message' => 'Đã đăng nhập thành công'
];

const AUTH_LOGOUT_200 = [
    'response_code' => 'auth_logout_200',
    'message' => 'Đăng xuất thành công'
];

const ACCOUNT_DELETED_200 = [
    'response_code' => 'account_deleted_200',
    'message' => 'Tài khoản đã được xóa thành công'
];

const AUTH_LOGIN_401 = [
    'response_code' => 'auth_login_401',
    'message' => 'Thông tin xác thực không khớp'
];

const AUTH_LOGIN_404 = [
    'response_code' => 'auth_login_404',
    'message' => 'Đã xảy ra lỗi hoặc không tìm thấy tài khoản'
];

const ACCOUNT_DISABLED = [
    'response_code' => 'account_disabled_401',
    'message' => 'Tài khoản đã bị vô hiệu, vui lòng liên hệ quản trị viên.'
];

const AUTH_LOGIN_403 = [
    'response_code' => 'auth_login_403',
    'message' => 'Thông tin đăng nhập sai'
];



const ACCESS_DENIED = [
    'response_code' => 'access_denied_403',
    'message' => 'Quyền truy cập bị từ chối'
];


//user management module
const USER_ROLE_CREATE_400 = [
    'response_code' => 'user_role_create_400',
    'message' => 'Thông tin không hợp lệ'
];

const USER_ROLE_CREATE_200 = [
    'response_code' => 'user_role_create_200',
    'message' => 'Thêm thành công'
];

const USER_ROLE_UPDATE_200 = [
    'response_code' => 'user_role_update_200',
    'message' => 'Cập nhật thành công'
];

const USER_ROLE_UPDATE_400 = [
    'response_code' => 'user_role_update_400',
    'message' => 'Dữ liệu không hợp lệ'
];

const DRIVER_STORE_200 = [
    'response_code' => 'driver_store_200',
    'message' => 'Thêm thành công'
];

const DRIVER_UPDATE_200 = [
    'response_code' => 'driver_store_200',
    'message' => 'Cập nhật thành công'
];

const DRIVER_DELETE_200 = [
    'response_code' => 'driver_delete_200',
    'message' => 'Xóa thông tin thành công'
];

const DRIVER_DELETE_403 = [
    'response_code' => 'driver_delete_403',
    'message' => 'Không thể xóa bây giờ'
];

const DRIVER_BID_NOT_FOUND_403 = [
    'response_code' => 'driver_bid_not_found_403',
    'message' => 'Tài xế hủy trả giá hoặc giá không có sẵn cho chuyến đi này'
];

const DRIVER_403 = [
    'response_code' => 'driver_403',
    'message' => 'Xe không có sẵn'
];
const CUSTOMER_STORE_200 = [
    'response_code' => 'customer_store_200',
    'message' => 'Thêm thành công'
];

const CUSTOMER_VERIFICATION_400 = [
    'response_code' => 'customer_verification_400',
    'message' => 'Vui lòng bật tùy chọn xác minh khách hàng'
];

const CUSTOMER_404 = [
    'response_code' => 'customer_404',
    'message' => 'Khách hàng không tồn tại'
];
const CUSTOMER_UPDATE_200 = [
    'response_code' => 'customer_store_200',
    'message' => 'Cập nhật thành công'
];

const CUSTOMER_DELETE_200 = [
    'response_code' => 'customer_delete_200',
    'message' => 'Xóa thông tin thành công'
];
const EMPLOYEE_STORE_200 = [
    'response_code' => 'employee_store_200',
    'message' => 'Thêm thành công'
];

const EMPLOYEE_UPDATE_200 = [
    'response_code' => 'employee_store_200',
    'message' => 'Cập nhật thành công'
];

const EMPLOYEE_DELETE_200 = [
    'response_code' => 'employee_delete_200',
    'message' => 'Xóa thông tin thành công'
];

const CUSTOMER_FUND_STORE_200 = [
    'response_code' => 'customer_fund_store_200',
    'message' => 'Thêm thành công'
];




// Vehicle Brand

const BRAND_CREATE_200 = [
    'response_code' => 'brand_create_200',
    'message' => 'Đã thêm thương hiệu thành công'
];

const BRAND_UPDATE_200 = [
    'response_code' => 'brand_update_200',
    'message' => 'Đã cập nhật thương hiệu thành công'
];

const BRAND_DELETE_200 = [
    'response_code' => 'brand_update_200',
    'message' => 'Đã xóa thương hiệu thành công'
];

// Vehicle Model

const MODEL_CREATE_200 = [
    'response_code' => 'model_create_200',
    'message' => 'Thêm đời xe thành công'
];

const MODEL_UPDATE_200 = [
    'response_code' => 'model_update_200',
    'message' => 'Cập nhật đời xe thành công'
];

const MODEL_EXISTS_400 = [
    'response_code' => 'model_exists_400',
    'message' => 'Đời xe đã tồn tại!'
];

// Vehicle Category

const CATEGORY_CREATE_200 = [
    'response_code' => 'category_create_200',
    'message' => 'Đã thêm danh mục thành công'
];

const NO_ACTIVE_CATEGORY_IN_ZONE_404 = [
    'response_code' => 'no_active_category_in_zone_404',
    'message' => 'Không có danh mục xe nào được chọn trong khu vực của bạn'
];

const CATEGORY_UPDATE_200 = [
    'response_code' => 'category_update_200',
    'message' => 'Đã cập nhật danh mục thành công'
];

// Vehicle

const VEHICLE_CREATE_200 = [
    'response_code' => 'vehicle_create_200',
    'message' => 'Đã thêm xe thành công'
];

const VEHICLE_UPDATE_200 = [
    'response_code' => 'vehicle_update_200',
    'message' => 'Đã cập nhật xe thành công'
];

const VEHICLE_DRIVER_EXISTS_403 = [
    'response_code' => 'vehicle_driver_exists_403',
    'message' => 'Bạn đã tạo một phương tiện.'
];

const LEVEL_CREATE_200 = [
    'response_code' => 'level_create_200',
    'message' => 'Thêm xếp hạng thành công'
];

const LEVEL_UPDATE_200 = [
    'response_code' => 'level_update_200',
    'message' => 'Cập nhật xếp hạng thành công'
];

const LEVEL_DELETE_200 = [
    'response_code' => 'level_delete_200',
    'message' => 'Xoá xếp hạng thành công'
];

const LEVEL_CREATE_403 = [
    'response_code' => 'level_create_403',
    'message' => 'Xếp hạng đầu tiên phải là 1'
];

const LEVEL_403 = [
    'response_code' => 'level_403',
    'message' => 'Tạo xếp hạng trước'
];

const LEVEL_DELETE_403 = [
    'response_code' => 'level_delete_403',
    'message' => 'Xoá xếp hạng bị hạn chế khi người dùng được chỉ định ở cấp độ này'
];


const BUSINESS_SETTING_UPDATE_200 = [
    'response_code' => 'business_setting_update_200',
    'message' => 'Đã cập nhật cài đặt thành công'
];

const SYSTEM_SETTING_UPDATE_200 = [
    'response_code' => 'system_setting_update_200',
    'message' => 'Đã cập nhật cài đặt thành công'
];


// Zone

const ZONE_STORE_200 = [
    'response_code' => 'zone_store_200',
    'message' => 'Đã thêm khu vực thành công'
];
const ZONE_STORE_INSTRUCTION_200 = [
    'response_code' => 'zone_store_200',
    'message' => 'Vui lòng thiết lập giá vé cho khu vực này ngay bây giờ'
];

const ZONE_UPDATE_200 = [
    'response_code' => 'zone_update_200',
    'message' => 'Cập nhật thành công'
];

const ZONE_DESTROY_200 = [
    'response_code' => 'zone_destroy_200',
    'message' => 'Xoá thành công'
];

const ZONE_404 = [
    'response_code' => 'zone_404',
    'message' => 'Không tìm thấy khuc vực'
];

const ZONE_RESOURCE_404 = [
    'response_code' => 'zone_404',
    'message' => 'Không có dịch vụ tại khu vực này'
];

const ROUTE_NOT_FOUND_404 = [
    'response_code' => 'route_404',
    'message' => 'Không tìm thấy tuyến đường đón và địa chỉ điểm đến bạn đã chọn'
];

// Area

const AREA_STORE_200 = [
    'response_code' => 'area_store_200',
    'message' => 'Đã thêm khu vực thành công'
];

const AREA_UPDATE_200 = [
    'response_code' => 'area_update_200',
    'message' => 'Khu vực được cập nhật thành công'
];

const AREA_DESTROY_200 = [
    'response_code' => 'area_destroy_200',
    'message' => 'Khu vực đã được xóa thành công'
];

const AREA_404 = [
    'response_code' => 'area_404',
    'message' => 'Không tìm thấy khu vực'
];

const AREA_RESOURCE_404 = [
    'response_code' => 'area_404',
    'message' => 'Không có nhà cung cấp hoặc dịch vụ nào có sẵn trong khu vực này'
];


// Pick Hour

const PICK_HOUR_STORE_200 = [
    'response_code' => 'pick_hour_store_200',
    'message' => 'Đã thêm giờ chọn thành công'
];

const PICK_HOUR_UPDATE_200 = [
    'response_code' => 'pick_hour_update_200',
    'message' => 'Giờ chọn đã được cập nhật thành công'
];

const PICK_HOUR_DESTROY_200 = [
    'response_code' => 'pick_hour_destroy_200',
    'message' => 'Giờ chọn đã được xóa thành công'
];

const PICK_HOUR_404 = [
    'response_code' => 'pick_hour_404',
    'message' => 'Không tìm thấy giờ chọn'
];

const PICK_HOUR_RESOURCE_404 = [
    'response_code' => 'pick_hour_404',
    'message' => 'Không có nhà cung cấp hoặc dịch vụ nào có sẵn trong giờ chọn này'
];

const SOCIAL_MEDIA_LINK_STORE_200 = [
    'response_code' => 'social_media_link_store_200',
    'message' => 'Liên kết MXH đã được thêm thành công'
];

const SOCIAL_MEDIA_LINK_UPDATE_200 = [
    'response_code' => 'social_media_link_update_200',
    'message' => 'Liên kết MXH đã cập nhật thành công'
];

const SOCIAL_MEDIA_LINK_DELETE_200 = [
    'response_code' => 'social_media_link_delete_200',
    'message' => 'Liên kết MXH đã xoá thành công'
];

const TESTIMONIAL_DELETE_200 = [
    'response_code' => 'testimonial_delete_200',
    'message' => 'Nhận xét đã được xóa thành công'
];
const OUR_SOLUTION_DELETE_200 = [
    'response_code' => 'our_solution_delete_200',
    'message' => 'Giải pháp của chúng tôi đã được xóa thành công'
];


// Banner

const BANNER_STORE_200 = [
    'response_code' => 'banner_store_200',
    'message' => 'Đã thêm banner thành công'
];

const BANNER_UPDATE_200 = [
    'response_code' => 'banner_update_200',
    'message' => 'Đã cập nhật banner thành công'
];

const BANNER_DESTROY_200 = [
    'response_code' => 'banner_destroy_200',
    'message' => 'Đã xoá banner thành công'
];

const BANNER_404 = [
    'response_code' => 'banner_404',
    'message' => 'Không tìm thấy banner'
];

const BANNER_RESOURCE_404 = [
    'response_code' => 'area_404',
    'message' => 'Không có nhà cung cấp hoặc dịch vụ nào có sẵn trong khu vực này'
];

// Milestone

const MILESTONE_STORE_200 = [
    'response_code' => 'milestone_store_200',
    'message' => 'Đã thêm thành công'
];

const MILESTONE_UPDATE_200 = [
    'response_code' => 'milestone_update_200',
    'message' => 'Đã cập nhật thành công'
];

const MILESTONE_DESTROY_200 = [
    'response_code' => 'milestone_destroy_200',
    'message' => 'Đã xóa thành công'
];

const MILESTONE_404 = [
    'response_code' => 'milestone_404',
    'message' => 'Không tìm thấy cột mốc'
];

const MILESTONE_RESOURCE_404 = [
    'response_code' => 'milestone_404',
    'message' => 'Không'
];

// Discount

const DISCOUNT_STORE_200 = [
    'response_code' => 'discount_store_200',
    'message' => 'Đã thêm giảm giá thành công'
];

const DISCOUNT_UPDATE_200 = [
    'response_code' => 'discount_update_200',
    'message' => 'Cập nhật giảm giá thành công'
];

const DISCOUNT_DESTROY_200 = [
    'response_code' => 'discount_destroy_200',
    'message' => 'Xoá giảm giá thành công'
];

const DISCOUNT_404 = [
    'response_code' => 'discount_404',
    'message' => 'Không tìm thấy giảm giá'
];

const DISCOUNT_RESOURCE_404 = [
    'response_code' => 'discount_404',
    'message' => 'Không có nhà cung cấp hoặc dịch vụ nào có sẵn trong khu vực này'
];

// BONUS

const BONUS_STORE_200 = [
    'response_code' => 'bonus_store_200',
    'message' => 'Tiền thưởng đã được thêm thành công'
];

const BONUS_UPDATE_200 = [
    'response_code' => 'bonus_update_200',
    'message' => 'Tiền thưởng được cập nhật thành công'
];

const BONUS_DESTROY_200 = [
    'response_code' => 'bonus_destroy_200',
    'message' => 'Tiền thưởng đã được xóa thành công'
];

const BONUS_404 = [
    'response_code' => 'BONUS_404',
    'message' => 'Không tìm thấy thưởng'
];

const BONUS_RESOURCE_404 = [
    'response_code' => 'area_404',
    'message' => 'Không có nhà cung cấp hoặc dịch vụ nào có sẵn trong khu vực này'
];


// COUPON

const COUPON_STORE_200 = [
    'response_code' => 'coupon_store_200',
    'message' => 'Đã thêm phiếu giảm giá thành công'
];

const COUPON_UPDATE_200 = [
    'response_code' => 'coupon_update_200',
    'message' => 'Phiếu giảm giá được cập nhật thành công'
];

const COUPON_DESTROY_200 = [
    'response_code' => 'coupon_destroy_200',
    'message' => 'Phiếu giảm giá đã được xóa thành công'
];


const COUPON_USAGE_LIMIT_406 = [
    'response_code' => 'coupon_usage_limit_406',
    'message' => 'Đã vượt quá giới hạn sử dụng phiếu giảm giá'
];


// Configuration

const CONFIGURATION_UPDATE_200 = [
    'response_code' => 'configuration_update_200',
    'message' => 'Đã cập nhật cấu hình thành công'
];

const LANDING_PAGE_UPDATE_200 = [
    'response_code' => 'landing_page_update_200',
    'message' => 'Đã được cập nhật thành công'
];


const ROLE_STORE_200 = [
    'response_code' => 'role_store_200',
    'message' => 'Đã thêm vai trò thành công'
];

const ROLE_UPDATE_200 = [
    'response_code' => 'role_update_200',
    'message' => 'Đã cập nhật vai trò thành công'
];

const ROLE_DESTROY_200 = [
    'response_code' => 'role_destroy_200',
    'message' => 'Đã xóa vai trò thành công'
];

//trip fare

const TRIP_FARE_STORE_200 = [
    'response_code' => 'trip_fare_store_200',
    'message' => 'Giá vé chuyến đi đã được thêm thành công'
];

const TRIP_FARE_UPDATE_200 = [
    'response_code' => 'trip_fare_update_200',
    'message' => 'Giá vé chuyến đi được cập nhật thành công'
];

const TRIP_FARE_DESTROY_200 = [
    'response_code' => 'trip_fare_destroy_200',
    'message' => 'Giá vé chuyến đi đã được xóa thành công'
];

//trip fare

const PARCEL_FARE_STORE_200 = [
    'response_code' => 'parcel_fare_store_200',
    'message' => 'Đã thêm giá giao hàng thành công'
];

const PARCEL_FARE_UPDATE_200 = [
    'response_code' => 'parcel_fare_update_200',
    'message' => 'Cập nhật giá giao hàng thành công'
];

const PARCEL_FARE_DESTROY_200 = [
    'response_code' => 'parcel_fare_destroy_200',
    'message' => 'Xoá giá giao hàng thành công'
];


// Parcel Category

const PARCEL_CATEGORY_UPDATE_200 = [
    'response_code' => 'parcel_category_update_200',
    'message' => 'Cập nhật thành công'
];


const PARCEL_CATEGORY_STORE_200 = [
    'response_code' => 'parcel_category_store_200',
    'message' => 'Thêm thành công'
];

const PARCEL_CATEGORY_DESTROY_200 = [
    'response_code' => 'parcel_category_destroy_200',
    'message' => 'Xoá thành công'
];


// Parcel Weight

const PARCEL_WEIGHT_UPDATE_200 = [
    'response_code' => 'parcel_weight_update_200',
    'message' => 'Trọng lượng cập nhật thành công'
];


const PARCEL_WEIGHT_STORE_200 = [
    'response_code' => 'parcel_weight_store_200',
    'message' => 'Trọng lượng thêm thành công'
];

const PARCEL_WEIGHT_EXISTS_403 = [
    'response_code' => 'parcel_weight_exists_403',
    'message' => 'Trọng lượng chồng chéo'
];
const PARCEL_WEIGHT_DESTROY_200 = [
    'response_code' => 'parcel_weight_destroy_200',
    'message' => 'Trọng lượng xóa thành công'
];

const PARCEL_WEIGHT_404 = [
    'response_code' => 'parcel_weight_404',
    'message' => 'Thiết lập trọng lượng'
];


//TRIP

const TRIP_REQUEST_STORE_200 = [
    'response_code' => 'trip_request_store_200',
    'message' => 'Chuyến đi được đặt thành công'
];

const TRIP_REQUEST_DELETE_200 = [
    'response_code' => 'trip_request_delete_200',
    'message' => 'Chuyến đi được xóa thành công'
];

const TRIP_REQUEST_DRIVER_403 = [
    'response_code' => 'trip_request_driver_403',
    'message' => 'Tài xế được chỉ định cho chuyến đi này'
];

const TRIP_REQUEST_404 = [
    'response_code' => 'trip_request_403',
    'message' => 'Không tìm thấy chuyến đi'
];

const TRIP_STATUS_NOT_COMPLETED_200 = [
    'response_code' => 'trip_status_200',
    'message' => 'Chuyến vẫn chưa kết thúc'
];

const TRIP_STATUS_COMPLETED_403 = [
    'response_code' => 'trip_status_200',
    'message' => 'Chuyến đã hoàn thành'
];

const TRIP_STATUS_CANCELLED_403 = [
    'response_code' => 'trip_status_200',
    'message' => 'Chuyến đã bị hủy'
];

const REVIEW_403 = [
    'response_code' => 'review_409',
    'message' => 'Đánh giá đã được gửi'
];

const REVIEW_SUBMIT_403 = [
    'response_code' => 'review_submit_409',
    'message' => 'Gửi đánh giá đã bị tắt'
];

const REVIEW_404 = [
    'response_code' => 'review_404',
    'message' => 'Không tìm thấy đánh giá'
];
const LANGUAGE_UPDATE_FAIL_200 = [
    'response_code' => 'language_status_update_fail_200',
    'message' => 'Ngôn ngữ mặc định không thể thay đổi hoặc xóa'
];

// otp

const OTP_MISMATCH_404 = [
    'response_code' => 'otp_mismatch_404',
    'message' => 'OTP không khớp'
];

//BID

const BIDDING_LIMIT_429 = [
    'response_code' => 'bidding_limit_429',
    'message' => 'Đã vượt quá giới hạn đặt giá cho chuyến đi này'
];

const RAISING_BID_FARE_403 = [
    'response_code' => 'raising_bid_fare_403',
    'message' => 'Giá đặt không được bằng hoặc thấp hơn giá đặt ban đầu'
];

const BIDDING_ACTION_200 = [
    'response_code' => 'bidding_action_200',
    'message' => 'Cập nhật đặt giá thành công'
];

const BIDDING_SUBMITTED_403 = [
    'response_code' => 'bidding_submitted_403',
    'message' => 'Đặt giá đã gửi đi'
];

const MAXIMUM_INTERMEDIATE_POINTS_403 = [
    'response_code' => 'maximum_intermediate_points_403',
    'message' => 'Không thể đặt thêm điểm'
];

const COUPON_AREA_NOT_VALID_403 = [
    'response_code' => 'coupon_area_not_valid_403',
    'message' => 'Mã giảm giá không thuộc khu vực hiện tại'
];

const COUPON_VEHICLE_CATEGORY_NOT_VALID_403 = [
    'response_code' => 'coupon_vehicle_category_not_valid_403',
    'message' => 'Không tìm thấy danh mục cho phiếu giảm giá này'
];

const USER_LAST_LOCATION_NOT_AVAILABLE_404 = [
    'response_code' => 'user_last_location_not_available_404',
    'message' => 'Vị trí cuối cùng của người dùng không có sẵn'
];

const INCOMPLETE_RIDE_403 = [
    'response_code' => 'incomplete_ride_403',
    'message' => 'Vui lòng hoàn thành chuyến đi trước đó'
];

const DRIVER_UNAVAILABLE_403 = [
    'response_code' => 'driver_unavailable_403',
    'message' => 'Vui lòng thay đổi trạng thái offline của bạn'
];

const CHAT_UNAVAILABLE_403 = [
    'response_code' => 'chat_unavailable_403',
    'message' => 'Trò chuyện chỉ khả dụng trong chuyến đi đang hoạt động'
];
const PARCEL_WEIGHT_400 = [
    'response_code' => 'parcel_weight_400',
    'message' => 'Trọng lượng bưu kiện không được chấp nhận'
];

//Wallet Errors
const INSUFFICIENT_FUND_403 = [
    'response_code' => 'insufficient_fund_403',
    'message' => 'Bạn không có đủ số dư trong ví'
];
const INSUFFICIENT_POINTS_403 = [
    'response_code' => 'insufficient_points_403',
    'message' => 'Bạn không có đủ điểm tích lũy'
];

const WITHDRAW_REQUEST_200 = [
    'response_code' => 'withdraw_request_200',
    'message' => 'Yêu cầu rút tiền đã được gửi để phê duyệt'
];

const WITHDRAW_REQUEST_AMOUNT_403 = [
    'response_code' => 'withdraw_request_amount_403',
    'message' => 'Vui lòng nhập '
];

const WITHDRAW_METHOD_INFO_STORE_200 = [
    'response_code' => 'withdraw_method_info_store_200',
    'message' => 'Thông tin rút tiền đã được lưu thành công'
];
const WITHDRAW_METHOD_INFO_UPDATE_200 = [
    'response_code' => 'withdraw_method_info_update_200',
    'message' => 'Thông tin rút tiền đã được cập nhật thành công'
];
const WITHDRAW_METHOD_INFO_DELETE_200 = [
    'response_code' => 'withdraw_method_info_delete_200',
    'message' => 'Thông tin rút tiền đã được xóa thành công'
];


const DRIVER_REQUEST_ACCEPT_TIMEOUT_408 = [
    'response_code' => 'driver_request_accept_timeout_408',
    'message' => 'Yêu cầu chuyến đi đã hết hạn'
];

const NEGATIVE_VALUE = [
    'message' => 'Giá trị âm không được chấp nhận'
];
const MAX_VALUE = [
    'message' => 'Giá trị tối đa có thể lớn hơn 10'
];

const COUPON_APPLIED_403 = [
    'response_code' => 'coupon_applied_403',
    'message' => 'Phiếu giảm giá đã được áp dụng cho chuyến đi này'
];
const COUPON_APPLIED_200 = [
    'response_code' => 'coupon_applied_200',
    'message' => 'Phiếu giảm giá được áp dụng thành công'
];

const COUPON_REMOVED_200 = [
    'response_code' => 'coupon_removed_200',
    'message' => 'Phiếu giảm giá được gỡ bỏ thành công'
];

const SELF_REGISTRATION_400 = [
    'response_code' => 'self_registration_400',
    'message' => 'Đăng ký tự động đã bị tắt. Vui lòng liên hệ với quản trị viên để đăng ký'
];

const LAST_LOCATION_404 = [
    'response_code' => 'last_location_404',
    'message' => 'Không tìm thấy vị trí gần nhất của người dùng'
];

const VEHICLE_CATEGORY_404 = [
    'response_code' => 'vehicle_category_404',
    'message' => 'Không tìm thấy loại phương tiện. Vui lòng kích hoạt hoặc tạo loại phương tiện mới'
];

const VEHICLE_NOT_APPROVED_OR_ACTIVE_404 = [
    'response_code' => 'vehicle_not_approved_or_active_404',
    'message' => 'Xe đã đăng ký của bạn chưa được phê duyệt hoặc không hoạt động. Vui lòng liên hệ với hỗ trợ viên, nếu không bạn sẽ không nhận được chuyến đi.'
];
const VEHICLE_NOT_REGISTERED_404 = [
    'response_code' => 'vehicle_not_registered_404',
    'message' => 'Vui lòng đăng ký xe của bạn, bạn sẽ không nhận được chuyến đi mới.'
];


const GATEWAYS_DEFAULT_204 = [
    'response_code' => 'default_204',
    'message' => 'Thông tin không được tìm thấy'
];

const GATEWAYS_DEFAULT_400 = [
    'response_code' => 'default_400',
    'message' => 'Thông tin không hợp lệ hoặc thiếu'
];
