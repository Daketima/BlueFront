<?php
    
    $curl = curl_init();

    //$id = $curl['id'];
    /*curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_HEADER, false);*/

    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://api.bluecollarhub.com.ng/api/v1/Article/9",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".$this->session->userdata('token')
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl))
    {
        print "Error: " . curl_error($curl);
    }
    else
    {
        // Show me the result

        $article = json_decode($response, TRUE);

        curl_close($curl);
    }

    //echo $article

    //print_r($article);
    //exit();
    
    $result = $article['message'];

    $id = '';
    $title = '';
    $articleBody = '';
    $approvalStatusId = '';

    if(!empty($data))
    {
        foreach ($data as $uf)
        {
            $id = $uf['id'];
            $title = $uf['title'];
            $articleBody = $uf['articleBody'];
            $approvalStatusId = $uf['approvalStatusId'];
        }
    }


?>



<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>articles">All Article</a></li>
                            <li class="active">Article</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <strong>Update  Article</strong> Details
                    </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Article Title</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control" value="<?php echo $result['title']; ?>">
                                    <input type="hidden" value="<?php echo $result['id']; ?>" name="id" id="id" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Username</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Article Status</label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <select name="select" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="2">Approved</option>
                                        <option value="8">Submitted</option>
                                        <option value="3">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Artical Content</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="" class="form-control"><?php echo $result['articleBody']; ?></textarea>
                                </div>
                            </div>
                            
                            
                            <div class="form-actions form-group">
                                <input type="submit" class="btn btn-primary btn-sm" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->