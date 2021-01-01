$(() => {
    let getDataCourier = (kota) => {
        return $.ajax({
            url: 'http://localhost:7001/api/v1/ongkir/cost',
            method: 'POST',
            data: {
                origin: 114,
                destination: kota,
                weight: 2,
                courier: "jne"
            },
            cache: false,
        })
    }
    $('#select-city').on('change', function() {
        console.log($(this).val());
        let destination = $(this).val();
        
        let response = getDataCourier(destination);
        response.then(res => {
            console.log(res);
            if (res) {
                let results = res.data.rajaongkir.results;
                let { code, costs, name } = results[0];
                let harga, estimate, description, service;

                $('#select-courier').prop('disabled', false);
                costs.forEach(cost => {
                    console.log(cost);
                    harga = cost.cost[0].value;
                    estimate = cost.cost[0].etd;
                    description = cost.description;
                    service = cost.service;
                });
                // console.log(code, name, harga, estimate, description, service);
                let newOption = new Option(name, code, true, true);
                $('#select-courier').append(newOption).trigger('change');
            }else {
                $('#select-courier').prop('disabled', true);
            }
        });
    })

    $("#select-courier").select2({
        placeholder: "select courier",   
    })
})