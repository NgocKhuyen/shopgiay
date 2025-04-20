$(document).on("click", ".tang, .giam", function (e) {
    e.preventDefault();
    let isIncrease = $(this).hasClass("tang");
    let container = $(this).closest(".cart-group");
    let input = container.find(".soluong");
    let price = parseInt(container.data("price"));
    let max = parseInt(input.attr("max"));
    let val = parseInt(input.val()) || 1;
    if (isIncrease && val < max) {
        val++;
    } else if (!isIncrease && val > 1) {
        val--;
    }
    input.val(val);
    // Cập nhật tổng tiền
    container.find(".item-total").text((val * price).toLocaleString("vi-VN") + "₫");
    // Gửi Ajax cập nhật DB
    let id = container.data("id");
    $.post("?mod=cart&act=update_qtnCart", {
        id_chitiet: id,
        quantity: val,
        price: price
    }, function (res) {
        if (!res.success) {
            alert("Lỗi khi cập nhật giỏ hàng!");
        } else {
            // Gọi để cập nhật tổng tiền bên phải
            $.get("index.php?mod=cart&act=cart&ajax=1", function (res) {
                console.log("Kết quả từ server:", res);
                if (res.success) {
                    $("#subtotal").text(res.total.toLocaleString("vi-VN") + "₫");
                    $("#total").text(res.total.toLocaleString("vi-VN") + "₫");
                }
                
            }, "json");
        }
    }, "json");
});


function initcartDetail(detailsData) {
    const colorRadios = document.querySelectorAll('input[name="color"]');
    const sizeRadios = document.querySelectorAll('input[name="size"]');
    const mappingInputs = document.querySelectorAll('.giaychitiet-map');
    const idChiTietInput = document.getElementById('id_giaychitiet');
    const quantityInput = document.getElementById('quantity');

    function updateIdChiTiet() {
        const selectedColor = document.querySelector('input[name="color"]:checked');
        const selectedSize = document.querySelector('input[name="size"]:checked');

        if (selectedColor && selectedSize) {
            const colorId = selectedColor.value;
            const sizeId = selectedSize.value;

            // Tìm input hidden tương ứng để lấy id_giaychitiet
            const matchedInput = document.querySelector(
                `.giaychitiet-map[data-color="${colorId}"][data-size="${sizeId}"]`
            );

            if (matchedInput) {
                idChiTietInput.value = matchedInput.value;

                // Tìm chi tiết trong mảng để lấy tồn kho
                const matchedDetail = detailsData.find(item =>
                    item.id_mausac == colorId && item.id_kichthuoc == sizeId
                );

                if (matchedDetail) {
                    quantityInput.max = matchedDetail.tonkho;
                    if (parseInt(quantityInput.value) > matchedDetail.tonkho) {
                        quantityInput.value = matchedDetail.tonkho;
                    }
                }
            } else {
                idChiTietInput.value = '';
                alert("Kích thước này không có sẵn cho màu đã chọn!");
                quantityInput.max = 1;
                quantityInput.value = 1;
            }
        }
    }

    colorRadios.forEach(r => r.addEventListener('change', updateIdChiTiet));
    sizeRadios.forEach(r => r.addEventListener('change', updateIdChiTiet));
}

function plusQuantity() {
    let quantityInput = document.getElementById('quantity');
    let currentValue = parseInt(quantityInput.value) || 1;
    let max = parseInt(quantityInput.max) || Infinity;

    if (currentValue < max) {
        quantityInput.value = currentValue + 1;
    }
}

function minusQuantity() {
    let quantityInput = document.getElementById('quantity');
    let currentValue = parseInt(quantityInput.value) || 1;
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

document.getElementById('quantity').addEventListener('input', function () {
    let val = parseInt(this.value) || 1;
    let max = parseInt(this.max) || Infinity;

    if (val > max) {
        this.value = max;
    } else if (val < 1) {
        this.value = 1;
    }
});
