<!DOCTYPE html>
<html>
    <head>
        <title>VisualCeption Report</title>
    </head>
    <body>

        <img src="http://www.thewebhatesme.com/wp-content/uploads/visualception.png" />

        <?php foreach ($failedTests as $failedTest): ?>
          <div class="failedTest">
            <h2><?php
              $failedMetadata = $failedTest->getFailedTest()->getMetadata();

              echo \Codeception\Test\Descriptor::getTestSignature($failedTest->getFailedTest()) . " (" . $failedMetadata->getCurrent('env') . ")"; ?></h2>
            <div class="deviationimage">
                Deviation Image <br />
                <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents($failedTest->getDeviationImage())); ?>' />
            </div>

            <div class="expectedimage">
                Expected Image <br />
                <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents($failedTest->getExpectedImage())); ?>' />
            </div>

            <div class="currentimage">
                Current Image <br />
                <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents($failedTest->getCurrentImage())); ?>' />
            </div>
          </div>

        <?php endforeach; ?>

    </body>
</html>
