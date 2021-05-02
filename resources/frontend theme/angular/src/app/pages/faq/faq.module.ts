import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FaqRoutingModule } from './faq-routing.module';
import { FaqComponent } from './faq.component';
import { TooltipModule } from 'ng2-tooltip-directive';

@NgModule({
  declarations: [FaqComponent],
  imports: [CommonModule, FaqRoutingModule, TooltipModule],
})
export class FaqModule {}
