$.getJSON("data/data-chart", function (data) {

    //array untuk chart label dan chart data
    var isi_labels = [];
    var isi_data = [];
    var isi_dataInt = [];

    //push ke dalam array isi label dan isi data
    var tbs = 0;
    var tbs_lewatmasak = 0;
    var tbs_mentah = 0;
    var tks = 0;
    var tbs_masak = 0;
    $(data).each(function (i) {

        //jml item dalam persentase
        tbs += parseInt(data[i].tbs);
        tbs_masak += parseInt(data[i].tbs_masak);
        tbs_mentah += parseInt(data[i].tbs_mentah);
        tbs_lewatmasak += parseInt(data[i].tbs_lewatmasak);
        tks += parseInt(data[i].tks);
    });

    var persenMasak = ((tbs_masak / tbs) * 100).toFixed(2);
    var persenMentah = ((tbs_mentah / tbs) * 100).toFixed(2);
    var persenLewat = ((tbs_lewatmasak / tbs) * 100).toFixed(2);
    var persenTks = ((tks / tbs) * 100).toFixed(2);

    //jumlah data
    isi_data.push(persenMasak);
    isi_data.push(persenMentah);
    isi_data.push(persenLewat);
    isi_data.push(persenTks);

    //buat label
    isi_labels.push("Masak: " + persenMasak + "%");
    isi_labels.push("Mentah: " + persenMentah + "%");
    isi_labels.push("Lewat Masak: " + persenLewat + "%");
    isi_labels.push("Tandan Kosong: " + persenTks + "%");

    //buat tooltip
    isi_dataInt.push(tbs_masak);
    isi_dataInt.push(tbs_mentah);
    isi_dataInt.push(tbs_lewatmasak);
    isi_dataInt.push(tks);

    var TabelData = "";
    TabelData += "<tr><td>" + isi_labels[0] + "</td><td>" + tbs_masak + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[1] + "</td><td>" + tbs_mentah + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[2] + "</td><td>" + tbs_lewatmasak + "</td></tr>";
    TabelData += "<tr><td>" + isi_labels[3] + "</td><td>" + tks + "</td></tr>";

    $("#DataTabelRipeness").html(TabelData);
    var ctx = document.getElementById('ripChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: isi_labels,
            datasets: [{
                label: 'Data Ripeness',
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