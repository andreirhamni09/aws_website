$.getJSON("data/data-chart", function (data) {

    //array untuk chart label dan chart data
    var isi_labels = [];
    var isi_data = [];
    var isi_dataInt = [];

    //push ke dalam array isi label dan isi data
    var vcut = 0;
    var tikus = 0;
    var tangkai = 0;
    var abnormal = 0;
    var total = 0;
    $(data).each(function (i) {
        //jml item dalam persentase
        vcut += parseInt(data[i].vcut);
        tikus += parseInt(data[i].tikus);
        tangkai += parseInt(data[i].tangkai_panjang);
        abnormal += parseInt(data[i].abnormal);
    });
    
    total = vcut + tikus + tangkai + abnormal;
    var persenVcut = ((vcut / total) * 100).toFixed(2);
    var persenTikus = ((tikus / total) * 100).toFixed(2);
    var persenTangkai = ((tangkai / total) * 100).toFixed(2);
    var persenAbnormal = ((abnormal / total) * 100).toFixed(2);

    //jumlah data
    isi_data.push(persenVcut);
    isi_data.push(persenTikus);
    isi_data.push(persenTangkai);
    isi_data.push(persenAbnormal);

    //buat label
    isi_labels.push("Non-Vcut: " + persenVcut + "%");
    isi_labels.push("Tikus: " + persenTikus + "%");
    isi_labels.push("Tangkai Panjang: " + persenTangkai + "%");
    isi_labels.push("Abnormal: " + persenAbnormal + "%");

    //buat tooltip
    isi_dataInt.push(vcut);
    isi_dataInt.push(tikus);
    isi_dataInt.push(tangkai);
    isi_dataInt.push(abnormal);

    var TabelData = "";
    TabelData += "<tr><td>" + isi_labels[0] + "</td><td>" + vcut + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[1] + "</td><td>" + tikus + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[2] + "</td><td>" + tangkai + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[3] + "</td><td>" + abnormal + "</td></tr>";

    $("#DataTabelStandarPanen").html(TabelData);
    var ctx = document.getElementById('standarChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: isi_labels,
            datasets: [{
                label: 'Standar Panen',
                //isi chart
                data: isi_data,

                backgroundColor: ['#00a65a', '#f56954', '#f39c12', '#00c0ef'],
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