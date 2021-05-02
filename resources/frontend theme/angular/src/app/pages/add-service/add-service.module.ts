import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AddServiceRoutingModule } from './add-service-routing.module';
import { AddServiceComponent } from './add-service.component';
import { NgxDropzoneModule } from 'ngx-dropzone';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [AddServiceComponent],
  imports: [
    CommonModule,
    AddServiceRoutingModule,
    NgxDropzoneModule,
    NgSelect2Module,
  ],
})
export class AddServiceModule {}
