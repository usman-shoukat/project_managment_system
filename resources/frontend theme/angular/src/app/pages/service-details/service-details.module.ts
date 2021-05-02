import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ServiceDetailsRoutingModule } from './service-details-routing.module';
import { ServiceDetailsComponent } from './service-details.component';
import { CrystalLightboxModule } from '@crystalui/angular-lightbox';
import { SlickCarouselModule } from 'ngx-slick-carousel';

@NgModule({
  declarations: [ServiceDetailsComponent],
  imports: [
    CommonModule,
    ServiceDetailsRoutingModule,
    CrystalLightboxModule,
    SlickCarouselModule,
  ],
})
export class ServiceDetailsModule {}
