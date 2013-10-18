
       <div class="well">
        <div class="row">
		<?php echo $form->labelEx($adminContact,  '['.VCard::DOMAIN_ADMIN_CONTACT.']wholeName'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']wholeName'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']wholeName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']organizationName'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']organizationName'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']organizationName'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine1'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine1'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine2'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine2'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine2'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']city'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']city'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']city'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']postalCode'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']postalCode'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']postalCode'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']country'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']country'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']country'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']voicePhone'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']voicePhone'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']voicePhone'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']electronicMailbox'); ?>
	</div>
        </div>