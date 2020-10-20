$.getJSON("data/data-chart", function (data) {

    //array untuk chart label dan chart data
    var isi_labels = [];
    var isi_data = [];
    var isi_dataInt = [];

    //push ke dalam array isi label dan isi data
    var normal = 0;
    var cnc = 0;
    var mekanisasi = 0;
    var total = 0;

    $(data).each(function (i) {
        //jml item
        if (data[i].jenis_panen == 'Normal'){
            normal += 1;
        } else if (data[i].jenis_panen == 'Cut and Carry'){
            cnc +=1;
        } else if (data[i].jenis_panen == 'Mekanisasi'){
            mekanisasi += 1;
        }
    });

    total = normal + cnc + mekanisasi;
    var persenNormal = ((normal / total) * 100).toFixed(2);
    var persenCnc = ((cnc / total) * 100).toFixed(2);
    var persenMekansisasi = ((mekanisasi / total) * 100).toFixed(2);

    //jumlah data
    isi_data.push(persenNormal);
    isi_data.push(persenCnc);
    isi_data.push(persenMekansisasi);

    //buat label
    isi_labels.push("Normal: " + persenNormal + "%");
    isi_labels.push("Cut and Carry: " + persenCnc + "%");
    isi_labels.push("Mekanisasi: " + persenMekansisasi + "%");

    //buat tooltip
    isi_dataInt.push(normal);
    isi_dataInt.push(cnc);
    isi_dataInt.push(mekanisasi);

    var TabelData = "";
    TabelData += "<tr><td>" + isi_labels[0] + "</td><td>" + normal + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[1] + "</td><td>" + cnc + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[2] + "</td><td>" + mekanisasi + "</td></tr>";

    $("#DataTabelJenisPanen").html(TabelData);
    var ctx = document.getElementById('jenisChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: isi_labels,
            datasets: [{
                label: 'Data Jenis Panen',
                //isi chart
                data: isi_data,

                backgroundColor: ['#00a65a', '#f56954', '#f39c12'],
            }]
        },

        options: {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true,
                position: 'right'
            },

            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var labels = data.labels[tooltipItem.index];
                        var currentValue = isi_dataInt[tooltipItem.index];
                        return labels + " [" + currentValue + "]";
                    }
                }
            }
        }
    });
});