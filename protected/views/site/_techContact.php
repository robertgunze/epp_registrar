
        <div class="well">
        <div >
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']wholeName'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']wholeName'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']wholeName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']organizationName'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']organizationName'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']organizationName'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine1'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine1'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine2'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine2'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine2'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']city'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']city'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']city'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']postalCode'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']postalCode'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']postalCode'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']country'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']country'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']country'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']voicePhone'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']voicePhone'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']voicePhone'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']electronicMailbox'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']registrationMailbox'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']registrationMailbox'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']registrationMailbox'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']faxNumber'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']faxNumber'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']faxNumber'); ?>
	</div>
        </div>