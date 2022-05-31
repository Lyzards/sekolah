<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <table class="table table-stripped table-hover table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once ('config.php');
                    $sql = "SELECT * FROM subjects";
                    $result = mysqli_query($config, $sql);
                    if (mysqli_num_rows($result)>0) {
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$row['subject']."</td>";
                            echo "<td>".$row['hours']."</td>";
                            echo "<td>
                                <a href='?m=subject&s=edit&id=".$row['id']."' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='?m=subject&s=delete&id=".$row['id']."' class='btn btn-danger btn-sm'>Hapus</a>
                                </td>";
                            echo"</tr>";
                            $no++;
                        }
                    } else {
                      echo "data kosong";
                    }
                    ?>
                </tbody>
            </table>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->