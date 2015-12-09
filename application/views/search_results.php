<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <?php $this->load->helper(array('form', 'search')); ?>
 
        <div class="am-content" style="margin-left: 0;">
            <div class="main-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                            <?php if(!$search_terms == NULL) { ?>
                                <h2> <?php echo @$total_results; ?> result found for  <span
                        
class="text-navy">"<?php echo $search_terms; ?>"</span></h2></small>
							<?php } ?>
                                <div class="search-form">
                                    <form action="" method="post">
                                        <div class="input-group">
                                            <input type="text" name="q" class="form-control input-lg" value="<?php echo $search_terms; ?>">
                                            <div class="input-group-btn">
                                                <button name="search" class="btn btn-lg btn-primary" type="submit" style="height:51px; padding: 0px 15px 0;
                font-size: 15px;
                line-height: 1.6333333;
                border-radius: 0;"> Search </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <?php if ( ! is_null($results)): ?>
                                    <?php if (count($results)): ?>





                                        <?php foreach ($results as $result): ?>
                                            <div class="search-result">
                                                <h3><a
href="#"><?php echo search_extract($result->caption, $search_terms); ?></a></h3> <a href="<?php echo $result->file; ?>" class="search-link"><?php echo search_highlight($result->file, $search_terms); ?></a>
                                                <p>
                                                    <?php echo search_extract($result->description, $search_terms); ?>
                                                </p>
                                                <p></p>
                                                <hr>
                                            </div>
                                            <?php endforeach ?>


                                                <?php else: ?>
                                                    <p><em>There are no results for your query.</em></p>
                                                    <?php endif ?>
                                                        <?php endif ?>

                                                            <div class="hr-line-dashed"></div>

                                                            <div class="hr-line-dashed"></div>

                            </div>
                        </div>


                    </div>
                </div>
                </div>
                </div>
             