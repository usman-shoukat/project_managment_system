import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EditServiceComponent } from './edit-service.component';
import { NgxDropzoneModule } from 'ngx-dropzone';
import { EditServiceRoutingModule } from './edit-service-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [EditServiceComponent],
  imports: [
    CommonModule,
    EditServiceRoutingModule,
    NgxDropzoneModule,
    NgSelect2Module,
  ],
})
export class EditServiceModule {}
