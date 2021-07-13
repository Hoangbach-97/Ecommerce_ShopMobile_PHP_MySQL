![Shop1](https://user-images.githubusercontent.com/75841838/125408945-a0386b00-e3e5-11eb-85cf-7c05303fd239.PNG)
![shop2](https://user-images.githubusercontent.com/75841838/125408955-a29ac500-e3e5-11eb-945e-567b1d50d92a.PNG)
![shop3](https://user-images.githubusercontent.com/75841838/125408979-a890a600-e3e5-11eb-92f6-fcc67cf90697.PNG)
![shop4](https://user-images.githubusercontent.com/75841838/125408984-a9c1d300-e3e5-11eb-993d-e3369e5b3576.PNG)
![shop5](https://user-images.githubusercontent.com/75841838/125408993-ab8b9680-e3e5-11eb-9505-156f80509e46.PNG)
# Ecommerce_ShopMobile_PHP_MySQL

    ******************FRONTEND*****

1. Cài đặt SASS/SCSS: Trước tiên phải cài Ruby() -> Cài SASS theo lệnh npm 
->Tạo file SASS: sass --watch style.scss:style.css(Vị trí file lưu tùy chỉnh)
2. Bootstrap V4.4
3. Owl Carousel 2: css+js: https://owlcarousel2.github.io/OwlCarousel2/
4. Font Awesome ICONS, Google Fonts

5. Filter sản phẩm: Dùng plugin isotope.:UI => https://isotope.metafizzy.co/filtering.html

    Lọc dựa vào class(class được gán riêng cho từng sản phẩm) được gán giá trị cho thuộc tính data-filter trong button

6. Tăng giảm quantity
    -Sử dụng jQuery: Hàm val(): lấy giá trị trường input và hàm click():thực hiện function khi click


    ****************BACKEND****************

7.Mô hình lập trình Dependency injection(Tìm hiểu về nguyên lý SOLID): DI trong PHP : ĐỂ Ý arguments của constructor_function  TRONG CLASS database/Product

8. Toàn bộ Controller chỉ sử dụng 3 class DBController:connect và close DB và Product(Controller): retrieve data và Cart


CHƯA CÓ: DASHBOARD, USER...
#Copyright: Hoàng bách
Emmes: Shift+Alt+Down
